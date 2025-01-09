<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiPromptId
 * @property string $assistantId
 * @property string $clientToken
 * @property string $description
 * @property Shapes\AIPromptTemplateConfiguration $templateConfiguration
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class UpdateAIPromptRequest extends Request
{
    /**
     * @param array{
     *     aiPromptId: string,
     *     assistantId: string,
     *     clientToken?: string,
     *     description?: string,
     *     templateConfiguration?: Shapes\AIPromptTemplateConfiguration,
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
