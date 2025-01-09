<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $id
 * @property string $description
 * @property int $expires
 */
class UpdateApiKeyRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     id: string,
     *     description?: string,
     *     expires?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
