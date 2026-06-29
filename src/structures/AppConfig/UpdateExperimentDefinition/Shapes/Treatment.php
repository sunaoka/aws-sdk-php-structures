<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property float $Weight
 * @property string|null $Description
 * @property FlagValue $FlagValue
 */
class Treatment extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
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
