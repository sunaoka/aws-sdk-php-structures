<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string $ResourceType
 * @property string $Key
 * @property string $Value
 * @property bool $PropagateAtLaunch
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     ResourceType?: string,
     *     Key: string,
     *     Value?: string,
     *     PropagateAtLaunch?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
