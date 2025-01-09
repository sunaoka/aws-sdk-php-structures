<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $id
 */
class DeleteApiKeyRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
