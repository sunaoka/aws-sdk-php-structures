<?php

namespace Sunaoka\Aws\Structures\CloudTrail\LookupEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property string $ResourceName
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     ResourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
