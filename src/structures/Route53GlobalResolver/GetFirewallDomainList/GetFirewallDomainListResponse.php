<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetFirewallDomainList;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $globalResolverId
 * @property string|null $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property int $domainCount
 * @property string $id
 * @property string $name
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetFirewallDomainListResponse extends Response
{
}
