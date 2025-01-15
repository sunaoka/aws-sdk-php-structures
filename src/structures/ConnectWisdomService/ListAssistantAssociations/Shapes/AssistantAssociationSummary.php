<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListAssistantAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantArn
 * @property string $assistantAssociationArn
 * @property string $assistantAssociationId
 * @property string $assistantId
 * @property AssistantAssociationOutputData $associationData
 * @property 'KNOWLEDGE_BASE' $associationType
 * @property array<string, string>|null $tags
 */
class AssistantAssociationSummary extends Shape
{
    /**
     * @param array{
     *     assistantArn: string,
     *     assistantAssociationArn: string,
     *     assistantAssociationId: string,
     *     assistantId: string,
     *     associationData: AssistantAssociationOutputData,
     *     associationType: 'KNOWLEDGE_BASE',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
