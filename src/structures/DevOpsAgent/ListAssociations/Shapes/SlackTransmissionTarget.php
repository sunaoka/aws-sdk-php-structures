<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlackChannel $opsOncallTarget
 * @property SlackChannel|null $opsSRETarget
 */
class SlackTransmissionTarget extends Shape
{
    /**
     * @param array{
     *     opsOncallTarget: SlackChannel,
     *     opsSRETarget?: SlackChannel|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
