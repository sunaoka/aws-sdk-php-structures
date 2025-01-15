<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiAgentId
 * @property string $assistantId
 * @property string|null $clientToken
 * @property Shapes\AIAgentConfiguration|null $configuration
 * @property string|null $description
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class UpdateAIAgentRequest extends Request
{
    /**
     * @param array{
     *     aiAgentId: string,
     *     assistantId: string,
     *     clientToken?: string|null,
     *     configuration?: Shapes\AIAgentConfiguration|null,
     *     description?: string|null,
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
