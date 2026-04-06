<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string|null $rootDomainUnitId
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\SingleSignOn|null $singleSignOn
 * @property string|null $domainExecutionRole
 * @property string|null $arn
 * @property string|null $kmsKeyIdentifier
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|null $status
 * @property string|null $portalUrl
 * @property array<string, string>|null $tags
 * @property 'V1'|'V2'|null $domainVersion
 * @property string|null $serviceRole
 */
class CreateDomainResponse extends Response
{
}
