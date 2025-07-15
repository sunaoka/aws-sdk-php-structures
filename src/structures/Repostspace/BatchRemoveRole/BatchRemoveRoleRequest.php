<?php

namespace Sunaoka\Aws\Structures\Repostspace\BatchRemoveRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property list<string> $accessorIds
 * @property 'EXPERT'|'MODERATOR'|'ADMINISTRATOR'|'SUPPORTREQUESTOR' $role
 */
class BatchRemoveRoleRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     accessorIds: list<string>,
     *     role: 'EXPERT'|'MODERATOR'|'ADMINISTRATOR'|'SUPPORTREQUESTOR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
