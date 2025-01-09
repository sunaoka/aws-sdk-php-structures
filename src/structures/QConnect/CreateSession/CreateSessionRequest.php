<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', Shapes\AIAgentConfigurationData> $aiAgentConfiguration
 * @property string $assistantId
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property Shapes\TagFilter $tagFilter
 * @property array<string, string> $tags
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     aiAgentConfiguration?: array<'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE', Shapes\AIAgentConfigurationData>,
     *     assistantId: string,
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     tagFilter?: Shapes\TagFilter,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
