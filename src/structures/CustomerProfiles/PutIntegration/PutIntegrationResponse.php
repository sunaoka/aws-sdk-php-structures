<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property string $Uri
 * @property string|null $ObjectTypeName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string>|null $Tags
 * @property array<string, string>|null $ObjectTypeNames
 * @property string|null $WorkflowId
 * @property bool|null $IsUnstructured
 * @property string|null $RoleArn
 * @property list<string>|null $EventTriggerNames
 */
class PutIntegrationResponse extends Response
{
}
