<?php

namespace Sunaoka\Aws\Structures\Ecs\ListGatewayClusterAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $gateway
 * @property string|null $cluster
 * @property list<'ACTIVE'|'DISASSOCIATING'|'INACTIVE'>|null $status
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListGatewayClusterAssociationsRequest extends Request
{
    /**
     * @param array{
     *     gateway?: string|null,
     *     cluster?: string|null,
     *     status?: list<'ACTIVE'|'DISASSOCIATING'|'INACTIVE'>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
