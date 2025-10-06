<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 * @property string|null $description
 * @property Shapes\TagFilter|null $tagFilter
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER', Shapes\AIAgentConfigurationData>|null $aiAgentConfiguration
 */
class UpdateSessionRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string,
     *     description?: string|null,
     *     tagFilter?: Shapes\TagFilter|null,
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER', Shapes\AIAgentConfigurationData>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
