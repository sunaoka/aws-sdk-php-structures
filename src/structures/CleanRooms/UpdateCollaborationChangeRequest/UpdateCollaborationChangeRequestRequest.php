<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateCollaborationChangeRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $changeRequestIdentifier
 * @property 'APPROVE'|'DENY'|'CANCEL'|'COMMIT' $action
 */
class UpdateCollaborationChangeRequestRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     changeRequestIdentifier: string,
     *     action: 'APPROVE'|'DENY'|'CANCEL'|'COMMIT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
