<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIpAddress
 * @property RtmpPushStreamDetails|null $RtmpPush
 */
class StandardRouterInputStreamDetails extends Shape
{
    /**
     * @param array{
     *     SourceIpAddress?: string|null,
     *     RtmpPush?: RtmpPushStreamDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
