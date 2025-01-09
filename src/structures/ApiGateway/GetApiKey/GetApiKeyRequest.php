<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiKey
 * @property bool $includeValue
 */
class GetApiKeyRequest extends Request
{
    /**
     * @param array{
     *     apiKey: string,
     *     includeValue?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
