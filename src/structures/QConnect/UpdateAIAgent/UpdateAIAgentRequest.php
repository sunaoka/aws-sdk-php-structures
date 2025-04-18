<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $assistantId
 * @property string $aiAgentId
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property Shapes\AIAgentConfiguration|null $configuration
 * @property string|null $description
 */
class UpdateAIAgentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     assistantId: string,
     *     aiAgentId: string,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     configuration?: Shapes\AIAgentConfiguration|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
