<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', Shapes\AIAgentConfigurationData>|null $aiAgentConfiguration
 * @property string $assistantId
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $name
 * @property Shapes\TagFilter|null $tagFilter
 * @property array<string, string>|null $tags
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', Shapes\AIAgentConfigurationData>|null,
     *     assistantId: string,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     name: string,
     *     tagFilter?: Shapes\TagFilter|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
