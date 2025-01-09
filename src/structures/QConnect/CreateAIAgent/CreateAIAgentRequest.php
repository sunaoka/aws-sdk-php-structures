<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $clientToken
 * @property Shapes\AIAgentConfiguration $configuration
 * @property string $description
 * @property string $name
 * @property array<string, string> $tags
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE' $type
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class CreateAIAgentRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     clientToken?: string,
     *     configuration: Shapes\AIAgentConfiguration,
     *     description?: string,
     *     name: string,
     *     tags?: array<string, string>,
     *     type: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE',
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
