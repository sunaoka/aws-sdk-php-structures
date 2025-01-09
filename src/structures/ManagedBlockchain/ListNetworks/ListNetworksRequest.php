<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'HYPERLEDGER_FABRIC'|'ETHEREUM' $Framework
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED' $Status
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListNetworksRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     Framework?: 'HYPERLEDGER_FABRIC'|'ETHEREUM',
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
