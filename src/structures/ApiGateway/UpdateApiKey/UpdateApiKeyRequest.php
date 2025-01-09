<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiKey
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateApiKeyRequest extends Request
{
    /**
     * @param array{
     *     apiKey: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
