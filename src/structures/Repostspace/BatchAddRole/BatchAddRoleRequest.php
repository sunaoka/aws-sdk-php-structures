<?php

namespace Sunaoka\Aws\Structures\Repostspace\BatchAddRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accessorIds
 * @property 'EXPERT'|'MODERATOR'|'ADMINISTRATOR'|'SUPPORTREQUESTOR' $role
 * @property string $spaceId
 */
class BatchAddRoleRequest extends Request
{
    /**
     * @param array{
     *     accessorIds: list<string>,
     *     role: 'EXPERT'|'MODERATOR'|'ADMINISTRATOR'|'SUPPORTREQUESTOR',
     *     spaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
