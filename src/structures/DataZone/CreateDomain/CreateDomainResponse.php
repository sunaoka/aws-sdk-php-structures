<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $description
 * @property string|null $domainExecutionRole
 * @property 'V1'|'V2'|null $domainVersion
 * @property string $id
 * @property string|null $kmsKeyIdentifier
 * @property string|null $name
 * @property string|null $portalUrl
 * @property string|null $rootDomainUnitId
 * @property string|null $serviceRole
 * @property Shapes\SingleSignOn|null $singleSignOn
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|null $status
 * @property array<string, string>|null $tags
 */
class CreateDomainResponse extends Response
{
}
