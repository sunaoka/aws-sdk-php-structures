<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiKey
 */
class DeleteApiKeyRequest extends Request
{
    /**
     * @param array{apiKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
