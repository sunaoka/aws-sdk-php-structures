<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiKey
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateApiKeyRequest extends Request
{
    /**
     * @param array{
     *     apiKey: string,
     *     patchOperations?: list<Shapes\PatchOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
