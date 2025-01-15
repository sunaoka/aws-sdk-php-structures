<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelTargetInfo|null $ChannelTargetInfo
 * @property ContactTargetInfo|null $ContactTargetInfo
 */
class Target extends Shape
{
    /**
     * @param array{
     *     ChannelTargetInfo?: ChannelTargetInfo|null,
     *     ContactTargetInfo?: ContactTargetInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
