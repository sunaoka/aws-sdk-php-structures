<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\UpdateMicrovmImageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $baseImageArn
 * @property string|null $baseImageVersion
 * @property string $buildRoleArn
 * @property string|null $description
 * @property Shapes\CodeArtifact $codeArtifact
 * @property Shapes\Logging|null $logging
 * @property list<string>|null $egressNetworkConnectors
 * @property list<Shapes\CpuConfiguration>|null $cpuConfigurations
 * @property list<Shapes\Resources>|null $resources
 * @property list<'ALL'>|null $additionalOsCapabilities
 * @property Shapes\Hooks|null $hooks
 * @property array<string, string>|null $environmentVariables
 * @property string $imageArn
 * @property string $imageVersion
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'DELETING'|'DELETED'|'DELETE_FAILED' $state
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $stateReason
 * @property array<string, string>|null $tags
 */
class UpdateMicrovmImageVersionResponse extends Response
{
}
