<?php

namespace Sunaoka\Aws\Structures\Athena\CreateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SelectedEngineVersion
 * @property string|null $EffectiveEngineVersion
 */
class EngineVersion extends Shape
{
    /**
     * @param array{
     *     SelectedEngineVersion?: string|null,
     *     EffectiveEngineVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
