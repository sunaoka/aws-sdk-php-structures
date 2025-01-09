<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $ownerAccount
 * @property string $vpcId
 * @property string $workgroupName
 */
class ListEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     ownerAccount?: string,
     *     vpcId?: string,
     *     workgroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
