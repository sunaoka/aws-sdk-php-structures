<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateAccessSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string|null $cidr
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property 'IPV4'|'IPV6'|'NONE'|null $ipAddressType
 * @property string|null $coreNetworkEndpointId
 * @property string|null $segment
 * @property string|null $name
 * @property string $dnsViewId
 * @property 'DO53'|'DOH'|'DOT' $protocol
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CreateAccessSourceResponse extends Response
{
}
