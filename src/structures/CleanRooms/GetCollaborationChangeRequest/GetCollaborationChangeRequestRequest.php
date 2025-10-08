<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationChangeRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $changeRequestIdentifier
 */
class GetCollaborationChangeRequestRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     changeRequestIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
