<?php

namespace Sunaoka\Aws\Structures\Iot\TestInvokeAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizerName
 * @property string|null $token
 * @property string|null $tokenSignature
 * @property Shapes\HttpContext|null $httpContext
 * @property Shapes\MqttContext|null $mqttContext
 * @property Shapes\TlsContext|null $tlsContext
 */
class TestInvokeAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     authorizerName: string,
     *     token?: string|null,
     *     tokenSignature?: string|null,
     *     httpContext?: Shapes\HttpContext|null,
     *     mqttContext?: Shapes\MqttContext|null,
     *     tlsContext?: Shapes\TlsContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
