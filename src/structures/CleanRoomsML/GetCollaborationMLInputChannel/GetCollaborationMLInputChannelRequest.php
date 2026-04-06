<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationMLInputChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mlInputChannelArn
 * @property string $collaborationIdentifier
 */
class GetCollaborationMLInputChannelRequest extends Request
{
    /**
     * @param array{
     *     mlInputChannelArn: string,
     *     collaborationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
