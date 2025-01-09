<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $description
 * @property int $expires
 */
class CreateApiKeyRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     description?: string,
     *     expires?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
