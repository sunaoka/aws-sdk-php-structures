<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', Shapes\AIAgentConfigurationData>|null $aiAgentConfiguration
 * @property string $assistantId
 * @property string|null $description
 * @property string $sessionId
 * @property Shapes\TagFilter|null $tagFilter
 */
class UpdateSessionRequest extends Request
{
    /**
     * @param array{
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', Shapes\AIAgentConfigurationData>|null,
     *     assistantId: string,
     *     description?: string|null,
     *     sessionId: string,
     *     tagFilter?: Shapes\TagFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
