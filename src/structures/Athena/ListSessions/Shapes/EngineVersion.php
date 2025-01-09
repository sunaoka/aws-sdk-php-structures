<?php

namespace Sunaoka\Aws\Structures\Athena\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SelectedEngineVersion
 * @property string $EffectiveEngineVersion
 */
class EngineVersion extends Shape
{
    /**
     * @param array{
     *     SelectedEngineVersion?: string,
     *     EffectiveEngineVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
