<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationArn
 * @property string $name
 * @property 'GITLAB_SELF_MANAGED'|'GITHUB' $type
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'INACTIVE'|'DISABLING' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $createdOn
 * @property \Aws\Api\DateTimeResult $lastUpdateOn
 * @property string|null $authorizationUrl
 * @property array<string, string>|null $tags
 */
class GetCodeSecurityIntegrationResponse extends Response
{
}
