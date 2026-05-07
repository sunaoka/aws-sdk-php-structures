<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourcePaymentToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GET'|'POST'|'PUT'|'DELETE'|'PATCH' $requestMethod
 * @property string|null $requestHost
 * @property string $requestPath
 * @property bool|null $includeWalletAuthToken
 * @property string|null $requestBody
 */
class CoinbaseCdpTokenRequestInput extends Shape
{
    /**
     * @param array{
     *     requestMethod: 'GET'|'POST'|'PUT'|'DELETE'|'PATCH',
     *     requestHost?: string|null,
     *     requestPath: string,
     *     includeWalletAuthToken?: bool|null,
     *     requestBody?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
