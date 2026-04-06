<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string $domainExecutionRole
 * @property 'V1'|'V2'|null $domainVersion
 * @property string $id
 * @property string|null $kmsKeyIdentifier
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property string|null $portalUrl
 * @property string|null $rootDomainUnitId
 * @property string|null $serviceRole
 * @property Shapes\SingleSignOn|null $singleSignOn
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED' $status
 * @property array<string, string>|null $tags
 */
class GetDomainResponse extends Response
{
}
