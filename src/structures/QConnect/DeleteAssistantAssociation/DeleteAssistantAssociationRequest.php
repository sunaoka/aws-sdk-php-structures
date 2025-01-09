<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAssistantAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantAssociationId
 * @property string $assistantId
 */
class DeleteAssistantAssociationRequest extends Request
{
    /**
     * @param array{
     *     assistantAssociationId: string,
     *     assistantId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
