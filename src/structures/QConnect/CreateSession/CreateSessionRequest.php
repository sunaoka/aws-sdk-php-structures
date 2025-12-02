<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $assistantId
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property Shapes\TagFilter|null $tagFilter
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION', Shapes\AIAgentConfigurationData>|null $aiAgentConfiguration
 * @property string|null $contactArn
 * @property list<Shapes\OrchestratorConfigurationEntry>|null $orchestratorConfigurationList
 * @property bool|null $removeOrchestratorConfigurationList
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     assistantId: string,
     *     name: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     tagFilter?: Shapes\TagFilter|null,
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'|'ORCHESTRATION'|'NOTE_TAKING'|'CASE_SUMMARIZATION', Shapes\AIAgentConfigurationData>|null,
     *     contactArn?: string|null,
     *     orchestratorConfigurationList?: list<Shapes\OrchestratorConfigurationEntry>|null,
     *     removeOrchestratorConfigurationList?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
