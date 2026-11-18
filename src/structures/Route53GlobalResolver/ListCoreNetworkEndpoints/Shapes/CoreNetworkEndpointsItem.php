<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListCoreNetworkEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<string> $availableRegions
 * @property string $coreNetworkArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $globalResolverId
 * @property string $id
 * @property list<CoreNetworkEndpointDnsIpItem> $ipAddresses
 * @property string|null $name
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CoreNetworkEndpointsItem extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     availableRegions: list<string>,
     *     coreNetworkArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     globalResolverId: string,
     *     id: string,
     *     ipAddresses: list<CoreNetworkEndpointDnsIpItem>,
     *     name?: string|null,
     *     status: 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
