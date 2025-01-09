<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelTargetInfo $ChannelTargetInfo
 * @property ContactTargetInfo $ContactTargetInfo
 */
class Target extends Shape
{
    /**
     * @param array{
     *     ChannelTargetInfo?: ChannelTargetInfo,
     *     ContactTargetInfo?: ContactTargetInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
