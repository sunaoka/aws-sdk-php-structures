<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $assistantId
 * @property string $aiPromptId
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property Shapes\AIPromptTemplateConfiguration|null $templateConfiguration
 * @property string|null $description
 * @property string|null $modelId
 */
class UpdateAIPromptRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     assistantId: string,
     *     aiPromptId: string,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     templateConfiguration?: Shapes\AIPromptTemplateConfiguration|null,
     *     description?: string|null,
     *     modelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
