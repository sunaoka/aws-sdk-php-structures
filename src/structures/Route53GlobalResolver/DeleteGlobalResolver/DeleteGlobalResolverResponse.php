<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteGlobalResolver;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $clientToken
 * @property string $dnsName
 * @property string|null $observabilityRegion
 * @property string $name
 * @property string|null $description
 * @property list<string> $regions
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property list<string> $ipv4Addresses
 */
class DeleteGlobalResolverResponse extends Response
{
}
