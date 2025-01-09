<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEND' $Video
 * @property 'SEND' $ScreenShare
 */
class ParticipantCapabilities extends Shape
{
    /**
     * @param array{
     *     Video?: 'SEND',
     *     ScreenShare?: 'SEND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
