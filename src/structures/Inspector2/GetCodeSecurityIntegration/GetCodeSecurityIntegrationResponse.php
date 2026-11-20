<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationArn
 * @property string $name
 * @property 'GITLAB_SELF_MANAGED'|'GITHUB'|'GITHUB_ENTERPRISE_SERVER' $type
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'INACTIVE'|'DISABLING'|'ESTABLISHING_CONNECTION_IN_PROGRESS'|'ESTABLISHING_CONNECTION_COMPLETED'|'ESTABLISHING_CONNECTION_FAILED'|'PENDING_MANIFEST_CODE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $createdOn
 * @property \Aws\Api\DateTimeResult $lastUpdateOn
 * @property string|null $authorizationUrl
 * @property Shapes\CodeSecurityIntegrationVpcConfiguration|null $vpcConfiguration
 * @property string|null $instanceUrl
 * @property array<string, string>|null $tags
 */
class GetCodeSecurityIntegrationResponse extends Response
{
}
