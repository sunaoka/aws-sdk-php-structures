<?php

namespace Sunaoka\Aws\Structures\Repostspace\BatchRemoveChannelRoleFromAccessors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $channelId
 * @property list<string> $accessorIds
 * @property 'ASKER'|'EXPERT'|'MODERATOR'|'SUPPORTREQUESTOR' $channelRole
 */
class BatchRemoveChannelRoleFromAccessorsRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     channelId: string,
     *     accessorIds: list<string>,
     *     channelRole: 'ASKER'|'EXPERT'|'MODERATOR'|'SUPPORTREQUESTOR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
