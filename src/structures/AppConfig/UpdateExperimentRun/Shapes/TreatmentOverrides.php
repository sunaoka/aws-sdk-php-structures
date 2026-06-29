<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Inline
 */
class TreatmentOverrides extends Shape
{
    /**
     * @param array{Inline?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
