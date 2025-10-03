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
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER', Shapes\AIAgentConfigurationData>|null $aiAgentConfiguration
 * @property string|null $contactArn
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
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER', Shapes\AIAgentConfigurationData>|null,
     *     contactArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
