<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDocumentationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $documentationVersion
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateDocumentationVersionRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     documentationVersion: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
