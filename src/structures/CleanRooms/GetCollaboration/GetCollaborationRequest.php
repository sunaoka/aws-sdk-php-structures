<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaboration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 */
class GetCollaborationRequest extends Request
{
    /**
     * @param array{collaborationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
