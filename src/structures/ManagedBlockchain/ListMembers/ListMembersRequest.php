<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $Name
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY' $Status
 * @property bool $IsOwned
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     Name?: string,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY',
     *     IsOwned?: bool,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
