<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiAgentId
 * @property string $assistantId
 * @property string $clientToken
 * @property Shapes\AIAgentConfiguration $configuration
 * @property string $description
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class UpdateAIAgentRequest extends Request
{
    /**
     * @param array{
     *     aiAgentId: string,
     *     assistantId: string,
     *     clientToken?: string,
     *     configuration?: Shapes\AIAgentConfiguration,
     *     description?: string,
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
