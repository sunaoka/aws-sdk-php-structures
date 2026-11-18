<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateCoreNetworkEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property list<string> $availableRegions
 * @property string $coreNetworkArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $globalResolverId
 * @property string $id
 * @property list<Shapes\CoreNetworkEndpointDnsIpItem> $ipAddresses
 * @property string|null $name
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CreateCoreNetworkEndpointResponse extends Response
{
}
