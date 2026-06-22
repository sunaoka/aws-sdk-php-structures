<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\UpdateMicrovmImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $imageArn
 * @property string $name
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED' $state
 * @property string|null $latestActiveImageVersion
 * @property string|null $latestFailedImageVersion
 * @property \Aws\Api\DateTimeResult $createdAt
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
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $imageVersion
 */
class UpdateMicrovmImageResponse extends Response
{
}
