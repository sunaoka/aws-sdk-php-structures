<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $id
 * @property string|null $description
 * @property int|null $expires
 */
class UpdateApiKeyRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     id: string,
     *     description?: string|null,
     *     expires?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
