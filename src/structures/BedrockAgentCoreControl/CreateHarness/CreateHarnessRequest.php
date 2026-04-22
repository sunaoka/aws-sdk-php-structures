<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateHarness;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessName
 * @property string|null $clientToken
 * @property string $executionRoleArn
 * @property Shapes\HarnessEnvironmentProviderRequest|null $environment
 * @property Shapes\HarnessEnvironmentArtifact|null $environmentArtifact
 * @property array<string, string>|null $environmentVariables
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property Shapes\HarnessModelConfiguration|null $model
 * @property list<Shapes\HarnessSystemContentBlock>|null $systemPrompt
 * @property list<Shapes\HarnessTool>|null $tools
 * @property list<Shapes\HarnessSkill>|null $skills
 * @property list<string>|null $allowedTools
 * @property Shapes\HarnessMemoryConfiguration|null $memory
 * @property Shapes\HarnessTruncationConfiguration|null $truncation
 * @property int|null $maxIterations
 * @property int|null $maxTokens
 * @property int|null $timeoutSeconds
 * @property array<string, string>|null $tags
 */
class CreateHarnessRequest extends Request
{
    /**
     * @param array{
     *     harnessName: string,
     *     clientToken?: string|null,
     *     executionRoleArn: string,
     *     environment?: Shapes\HarnessEnvironmentProviderRequest|null,
     *     environmentArtifact?: Shapes\HarnessEnvironmentArtifact|null,
     *     environmentVariables?: array<string, string>|null,
     *     authorizerConfiguration?: Shapes\AuthorizerConfiguration|null,
     *     model?: Shapes\HarnessModelConfiguration|null,
     *     systemPrompt?: list<Shapes\HarnessSystemContentBlock>|null,
     *     tools?: list<Shapes\HarnessTool>|null,
     *     skills?: list<Shapes\HarnessSkill>|null,
     *     allowedTools?: list<string>|null,
     *     memory?: Shapes\HarnessMemoryConfiguration|null,
     *     truncation?: Shapes\HarnessTruncationConfiguration|null,
     *     maxIterations?: int|null,
     *     maxTokens?: int|null,
     *     timeoutSeconds?: int|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
