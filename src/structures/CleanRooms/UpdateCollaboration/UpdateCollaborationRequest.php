<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateCollaboration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $name
 * @property string $description
 */
class UpdateCollaborationRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     name?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
