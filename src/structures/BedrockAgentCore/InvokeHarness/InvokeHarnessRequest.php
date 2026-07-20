<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessArn
 * @property string|null $qualifier
 * @property string $runtimeSessionId
 * @property string|null $runtimeUserId
 * @property string|null $traceParent
 * @property string|null $traceState
 * @property string|null $traceId
 * @property string|null $baggage
 * @property list<Shapes\HarnessMessage> $messages
 * @property Shapes\HarnessModelConfiguration|null $model
 * @property list<Shapes\HarnessSystemContentBlock>|null $systemPrompt
 * @property list<Shapes\HarnessTool>|null $tools
 * @property list<Shapes\HarnessSkill>|null $skills
 * @property list<string>|null $allowedTools
 * @property int|null $maxIterations
 * @property int|null $maxTokens
 * @property int|null $timeoutSeconds
 * @property string|null $actorId
 */
class InvokeHarnessRequest extends Request
{
    /**
     * @param array{
     *     harnessArn: string,
     *     qualifier?: string|null,
     *     runtimeSessionId: string,
     *     runtimeUserId?: string|null,
     *     traceParent?: string|null,
     *     traceState?: string|null,
     *     traceId?: string|null,
     *     baggage?: string|null,
     *     messages: list<Shapes\HarnessMessage>,
     *     model?: Shapes\HarnessModelConfiguration|null,
     *     systemPrompt?: list<Shapes\HarnessSystemContentBlock>|null,
     *     tools?: list<Shapes\HarnessTool>|null,
     *     skills?: list<Shapes\HarnessSkill>|null,
     *     allowedTools?: list<string>|null,
     *     maxIterations?: int|null,
     *     maxTokens?: int|null,
     *     timeoutSeconds?: int|null,
     *     actorId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
