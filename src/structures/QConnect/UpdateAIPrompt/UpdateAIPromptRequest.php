<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiPromptId
 * @property string $assistantId
 * @property string|null $clientToken
 * @property string|null $description
 * @property Shapes\AIPromptTemplateConfiguration|null $templateConfiguration
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class UpdateAIPromptRequest extends Request
{
    /**
     * @param array{
     *     aiPromptId: string,
     *     assistantId: string,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     templateConfiguration?: Shapes\AIPromptTemplateConfiguration|null,
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
