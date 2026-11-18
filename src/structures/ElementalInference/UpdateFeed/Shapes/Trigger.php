<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FixedIntervalTrigger|null $fixedInterval
 * @property ShotTrigger|null $perShot
 * @property SceneTrigger|null $perScene
 * @property ClipTrigger|null $perClip
 */
class Trigger extends Shape
{
    /**
     * @param array{
     *     fixedInterval?: FixedIntervalTrigger|null,
     *     perShot?: ShotTrigger|null,
     *     perScene?: SceneTrigger|null,
     *     perClip?: ClipTrigger|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
