<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string|null $rootDomainUnitId
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\SingleSignOn|null $singleSignOn
 * @property string $domainExecutionRole
 * @property string|null $arn
 * @property string|null $kmsKeyIdentifier
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED' $status
 * @property string|null $portalUrl
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property array<string, string>|null $tags
 * @property 'V1'|'V2'|null $domainVersion
 * @property string|null $serviceRole
 */
class GetDomainResponse extends Response
{
}
