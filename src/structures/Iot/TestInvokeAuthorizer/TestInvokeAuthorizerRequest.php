<?php

namespace Sunaoka\Aws\Structures\Iot\TestInvokeAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizerName
 * @property string $token
 * @property string $tokenSignature
 * @property Shapes\HttpContext $httpContext
 * @property Shapes\MqttContext $mqttContext
 * @property Shapes\TlsContext $tlsContext
 */
class TestInvokeAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     authorizerName: string,
     *     token?: string,
     *     tokenSignature?: string,
     *     httpContext?: Shapes\HttpContext,
     *     mqttContext?: Shapes\MqttContext,
     *     tlsContext?: Shapes\TlsContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
