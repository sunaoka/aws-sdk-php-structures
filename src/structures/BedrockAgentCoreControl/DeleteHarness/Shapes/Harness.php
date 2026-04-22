<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $harnessId
 * @property string $harnessName
 * @property string $arn
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED' $status
 * @property string $executionRoleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property HarnessModelConfiguration $model
 * @property list<HarnessSystemContentBlock> $systemPrompt
 * @property list<HarnessTool> $tools
 * @property list<HarnessSkill> $skills
 * @property list<string> $allowedTools
 * @property HarnessTruncationConfiguration $truncation
 * @property HarnessEnvironmentProvider $environment
 * @property HarnessEnvironmentArtifact|null $environmentArtifact
 * @property array<string, string>|null $environmentVariables
 * @property AuthorizerConfiguration|null $authorizerConfiguration
 * @property HarnessMemoryConfiguration|null $memory
 * @property int|null $maxIterations
 * @property int|null $maxTokens
 * @property int|null $timeoutSeconds
 * @property string|null $failureReason
 */
class Harness extends Shape
{
    /**
     * @param array{
     *     harnessId: string,
     *     harnessName: string,
     *     arn: string,
     *     status: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED',
     *     executionRoleArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     model: HarnessModelConfiguration,
     *     systemPrompt: list<HarnessSystemContentBlock>,
     *     tools: list<HarnessTool>,
     *     skills: list<HarnessSkill>,
     *     allowedTools: list<string>,
     *     truncation: HarnessTruncationConfiguration,
     *     environment: HarnessEnvironmentProvider,
     *     environmentArtifact?: HarnessEnvironmentArtifact|null,
     *     environmentVariables?: array<string, string>|null,
     *     authorizerConfiguration?: AuthorizerConfiguration|null,
     *     memory?: HarnessMemoryConfiguration|null,
     *     maxIterations?: int|null,
     *     maxTokens?: int|null,
     *     timeoutSeconds?: int|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
