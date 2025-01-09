<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $domainExecutionRole
 * @property 'V1'|'V2' $domainVersion
 * @property string $id
 * @property string $kmsKeyIdentifier
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property string $portalUrl
 * @property string $rootDomainUnitId
 * @property string $serviceRole
 * @property Shapes\SingleSignOn $singleSignOn
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED' $status
 * @property array<string, string> $tags
 */
class GetDomainResponse extends Response
{
}
