<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', Shapes\AIAgentConfigurationData> $aiAgentConfiguration
 * @property string $assistantId
 * @property string $description
 * @property string $sessionId
 * @property Shapes\TagFilter $tagFilter
 */
class UpdateSessionRequest extends Request
{
    /**
     * @param array{
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', Shapes\AIAgentConfigurationData>,
     *     assistantId: string,
     *     description?: string,
     *     sessionId: string,
     *     tagFilter?: Shapes\TagFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
