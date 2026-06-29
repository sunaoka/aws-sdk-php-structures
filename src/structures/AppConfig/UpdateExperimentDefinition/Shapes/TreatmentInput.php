<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Weight
 * @property string|null $Description
 * @property FlagValue $FlagValue
 */
class TreatmentInput extends Shape
{
    /**
     * @param array{
     *     Weight: float,
     *     Description?: string|null,
     *     FlagValue: FlagValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
