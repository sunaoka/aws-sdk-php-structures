<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workspaceId
 * @property string $workspaceName
 * @property SlackTransmissionTarget $transmissionTarget
 * @property SlackBidirectionalConfiguration|null $bidirectional
 */
class SlackConfiguration extends Shape
{
    /**
     * @param array{
     *     workspaceId: string,
     *     workspaceName: string,
     *     transmissionTarget: SlackTransmissionTarget,
     *     bidirectional?: SlackBidirectionalConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
