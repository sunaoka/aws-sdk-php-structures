<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string|null $clientToken
 * @property Shapes\AIAgentConfiguration $configuration
 * @property string|null $description
 * @property string $name
 * @property array<string, string>|null $tags
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE' $type
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class CreateAIAgentRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     clientToken?: string|null,
     *     configuration: Shapes\AIAgentConfiguration,
     *     description?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null,
     *     type: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE',
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
