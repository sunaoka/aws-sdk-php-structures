<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string|null $description
 * @property int|null $expires
 */
class CreateApiKeyRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     description?: string|null,
     *     expires?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
