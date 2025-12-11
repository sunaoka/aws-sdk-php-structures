<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateDNSView;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string|null $clientToken
 * @property 'ENABLED'|'DISABLED' $dnssecValidation
 * @property 'ENABLED'|'DISABLED' $ednsClientSubnet
 * @property 'ENABLED'|'DISABLED' $firewallRulesFailOpen
 * @property string $name
 * @property string|null $description
 * @property string $globalResolverId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'ENABLING'|'DISABLING'|'DISABLED'|'DELETING' $status
 */
class CreateDNSViewResponse extends Response
{
}
