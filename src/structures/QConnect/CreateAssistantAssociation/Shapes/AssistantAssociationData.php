<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistantAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantAssociationId
 * @property string $assistantAssociationArn
 * @property string $assistantId
 * @property string $assistantArn
 * @property 'KNOWLEDGE_BASE' $associationType
 * @property AssistantAssociationOutputData $associationData
 * @property array<string, string>|null $tags
 */
class AssistantAssociationData extends Shape
{
    /**
     * @param array{
     *     assistantAssociationId: string,
     *     assistantAssociationArn: string,
     *     assistantId: string,
     *     assistantArn: string,
     *     associationType: 'KNOWLEDGE_BASE',
     *     associationData: AssistantAssociationOutputData,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
