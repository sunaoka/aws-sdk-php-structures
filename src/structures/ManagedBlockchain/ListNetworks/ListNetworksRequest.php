<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property 'HYPERLEDGER_FABRIC'|'ETHEREUM'|null $Framework
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED'|null $Status
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class ListNetworksRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Framework?: 'HYPERLEDGER_FABRIC'|'ETHEREUM'|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED'|null,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
