<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetAccessSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $cidr
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property 'IPV4'|'IPV6' $ipAddressType
 * @property string|null $name
 * @property string $dnsViewId
 * @property 'DO53'|'DOH'|'DOT' $protocol
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetAccessSourceResponse extends Response
{
}
