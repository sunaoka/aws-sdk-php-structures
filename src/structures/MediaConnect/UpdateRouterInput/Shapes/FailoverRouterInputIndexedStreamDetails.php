<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SourceIndex
 * @property string|null $SourceIpAddress
 * @property RtmpPushStreamDetails|null $RtmpPush
 */
class FailoverRouterInputIndexedStreamDetails extends Shape
{
    /**
     * @param array{
     *     SourceIndex: int,
     *     SourceIpAddress?: string|null,
     *     RtmpPush?: RtmpPushStreamDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
