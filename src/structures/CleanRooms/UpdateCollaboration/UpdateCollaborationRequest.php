<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateCollaboration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string|null $name
 * @property string|null $description
 * @property 'SPARK'|'CLEAN_ROOMS_SQL'|null $analyticsEngine
 */
class UpdateCollaborationRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     analyticsEngine?: 'SPARK'|'CLEAN_ROOMS_SQL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
