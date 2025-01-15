<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string|null $MemberId
 * @property 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY'|null $Status
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 */
class ListNodesRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MemberId?: string|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY'|null,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
