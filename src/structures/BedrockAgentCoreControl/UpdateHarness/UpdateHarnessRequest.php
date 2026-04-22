<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessId
 * @property string|null $clientToken
 * @property string|null $executionRoleArn
 * @property Shapes\HarnessEnvironmentProviderRequest|null $environment
 * @property Shapes\UpdatedHarnessEnvironmentArtifact|null $environmentArtifact
 * @property array<string, string>|null $environmentVariables
 * @property Shapes\UpdatedAuthorizerConfiguration|null $authorizerConfiguration
 * @property Shapes\HarnessModelConfiguration|null $model
 * @property list<Shapes\HarnessSystemContentBlock>|null $systemPrompt
 * @property list<Shapes\HarnessTool>|null $tools
 * @property list<Shapes\HarnessSkill>|null $skills
 * @property list<string>|null $allowedTools
 * @property Shapes\UpdatedHarnessMemoryConfiguration|null $memory
 * @property Shapes\HarnessTruncationConfiguration|null $truncation
 * @property int|null $maxIterations
 * @property int|null $maxTokens
 * @property int|null $timeoutSeconds
 */
class UpdateHarnessRequest extends Request
{
    /**
     * @param array{
     *     harnessId: string,
     *     clientToken?: string|null,
     *     executionRoleArn?: string|null,
     *     environment?: Shapes\HarnessEnvironmentProviderRequest|null,
     *     environmentArtifact?: Shapes\UpdatedHarnessEnvironmentArtifact|null,
     *     environmentVariables?: array<string, string>|null,
     *     authorizerConfiguration?: Shapes\UpdatedAuthorizerConfiguration|null,
     *     model?: Shapes\HarnessModelConfiguration|null,
     *     systemPrompt?: list<Shapes\HarnessSystemContentBlock>|null,
     *     tools?: list<Shapes\HarnessTool>|null,
     *     skills?: list<Shapes\HarnessSkill>|null,
     *     allowedTools?: list<string>|null,
     *     memory?: Shapes\UpdatedHarnessMemoryConfiguration|null,
     *     truncation?: Shapes\HarnessTruncationConfiguration|null,
     *     maxIterations?: int|null,
     *     maxTokens?: int|null,
     *     timeoutSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
