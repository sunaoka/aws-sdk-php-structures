<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateConsentPortal;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ConsentPortalSource> $sources
 * @property string $consentPortalArn
 * @property string $consentPortalId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property string $executionRoleArn
 * @property Shapes\ConsentPortalIdpConfig $idpConfig
 * @property string $name
 * @property string|null $portalUrl
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'FAILED' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CreateConsentPortalResponse extends Response
{
}
