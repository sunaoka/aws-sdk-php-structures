<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $MemberId
 * @property 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY' $Status
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListNodesRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MemberId?: string,
     *     Status?: 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
