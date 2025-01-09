<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistantAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property Shapes\AssistantAssociationInputData $association
 * @property 'KNOWLEDGE_BASE' $associationType
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateAssistantAssociationRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     association: Shapes\AssistantAssociationInputData,
     *     associationType: 'KNOWLEDGE_BASE',
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
