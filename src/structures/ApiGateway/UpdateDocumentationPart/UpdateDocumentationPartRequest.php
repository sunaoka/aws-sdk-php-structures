<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDocumentationPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $documentationPartId
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateDocumentationPartRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     documentationPartId: string,
     *     patchOperations?: list<Shapes\PatchOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
