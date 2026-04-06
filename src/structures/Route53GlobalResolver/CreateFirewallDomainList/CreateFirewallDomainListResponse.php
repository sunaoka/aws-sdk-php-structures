<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateFirewallDomainList;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $globalResolverId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property int $domainCount
 * @property string $id
 * @property string $name
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CreateFirewallDomainListResponse extends Response
{
}
