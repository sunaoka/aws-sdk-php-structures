<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteCollaboration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 */
class DeleteCollaborationRequest extends Request
{
    /**
     * @param array{collaborationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
