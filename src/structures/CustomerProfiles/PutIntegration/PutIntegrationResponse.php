<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property string $Uri
 * @property string $ObjectTypeName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 * @property array<string, string> $ObjectTypeNames
 * @property string $WorkflowId
 * @property bool $IsUnstructured
 * @property string $RoleArn
 * @property list<string> $EventTriggerNames
 */
class PutIntegrationResponse extends Response
{
}
