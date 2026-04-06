<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistantAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property 'KNOWLEDGE_BASE'|'EXTERNAL_BEDROCK_KNOWLEDGE_BASE' $associationType
 * @property Shapes\AssistantAssociationInputData $association
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateAssistantAssociationRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     associationType: 'KNOWLEDGE_BASE'|'EXTERNAL_BEDROCK_KNOWLEDGE_BASE',
     *     association: Shapes\AssistantAssociationInputData,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
