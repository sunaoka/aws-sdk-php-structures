<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaborationChangeRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property list<Shapes\ChangeInput> $changes
 */
class CreateCollaborationChangeRequestRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     changes: list<Shapes\ChangeInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
