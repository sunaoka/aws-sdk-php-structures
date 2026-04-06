<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListInsightsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property string|null $ResourceName
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ResourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
