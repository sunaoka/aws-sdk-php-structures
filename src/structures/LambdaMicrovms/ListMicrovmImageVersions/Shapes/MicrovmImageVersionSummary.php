<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovmImageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $baseImageArn
 * @property string|null $baseImageVersion
 * @property string $buildRoleArn
 * @property string|null $description
 * @property CodeArtifact $codeArtifact
 * @property Logging|null $logging
 * @property list<string>|null $egressNetworkConnectors
 * @property list<CpuConfiguration>|null $cpuConfigurations
 * @property list<Resources>|null $resources
 * @property list<'ALL'>|null $additionalOsCapabilities
 * @property Hooks|null $hooks
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
class MicrovmImageVersionSummary extends Shape
{
    /**
     * @param array{
     *     baseImageArn: string,
     *     baseImageVersion?: string|null,
     *     buildRoleArn: string,
     *     description?: string|null,
     *     codeArtifact: CodeArtifact,
     *     logging?: Logging|null,
     *     egressNetworkConnectors?: list<string>|null,
     *     cpuConfigurations?: list<CpuConfiguration>|null,
     *     resources?: list<Resources>|null,
     *     additionalOsCapabilities?: list<'ALL'>|null,
     *     hooks?: Hooks|null,
     *     environmentVariables?: array<string, string>|null,
     *     imageArn: string,
     *     imageVersion: string,
     *     state: 'PENDING'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'DELETING'|'DELETED'|'DELETE_FAILED',
     *     status: 'ACTIVE'|'INACTIVE',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     stateReason?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
