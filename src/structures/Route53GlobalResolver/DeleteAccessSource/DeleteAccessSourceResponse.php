<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteAccessSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string|null $cidr
 * @property string|null $coreNetworkEndpointId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property 'IPV4'|'IPV6'|'NONE'|null $ipAddressType
 * @property string|null $name
 * @property string $dnsViewId
 * @property 'DO53'|'DOH'|'DOT' $protocol
 * @property string|null $segment
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DeleteAccessSourceResponse extends Response
{
}
