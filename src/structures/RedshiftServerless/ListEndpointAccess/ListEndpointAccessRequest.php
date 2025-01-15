<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $ownerAccount
 * @property string|null $vpcId
 * @property string|null $workgroupName
 */
class ListEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     ownerAccount?: string|null,
     *     vpcId?: string|null,
     *     workgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
