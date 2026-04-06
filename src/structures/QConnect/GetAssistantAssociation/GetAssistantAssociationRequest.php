<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAssistantAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantAssociationId
 * @property string $assistantId
 */
class GetAssistantAssociationRequest extends Request
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
