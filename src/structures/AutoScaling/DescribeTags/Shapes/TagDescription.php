<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property string|null $ResourceType
 * @property string|null $Key
 * @property string|null $Value
 * @property bool|null $PropagateAtLaunch
 */
class TagDescription extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     ResourceType?: string|null,
     *     Key?: string|null,
     *     Value?: string|null,
     *     PropagateAtLaunch?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
