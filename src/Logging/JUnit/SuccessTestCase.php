<?php

declare(strict_types=1);

namespace ParaTest\Logging\JUnit;

/** @internal */
final class SuccessTestCase extends TestCase
{
    public ?string $systemOutput;

    public function __construct(
        string $name,
        string $class,
        string $file,
        int $line,
        int $assertions,
        float $time,
        ?string $systemOutput
    ) {
        parent::__construct($name, $class, $file, $line, $assertions, $time);

        $this->systemOutput = $systemOutput;
    }
}
