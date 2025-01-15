<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string|null $Name
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY'|null $Status
 * @property bool|null $IsOwned
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     Name?: string|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'INACCESSIBLE_ENCRYPTION_KEY'|null,
     *     IsOwned?: bool|null,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
