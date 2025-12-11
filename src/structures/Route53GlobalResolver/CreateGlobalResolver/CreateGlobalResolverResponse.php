<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateGlobalResolver;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property string $dnsName
 * @property list<string> $ipv4Addresses
 * @property string $name
 * @property string|null $observabilityRegion
 * @property list<string> $regions
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CreateGlobalResolverResponse extends Response
{
}
