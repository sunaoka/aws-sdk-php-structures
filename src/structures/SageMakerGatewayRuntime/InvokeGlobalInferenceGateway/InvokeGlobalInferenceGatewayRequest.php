<?php

namespace Sunaoka\Aws\Structures\SageMakerGatewayRuntime\InvokeGlobalInferenceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayId
 * @property string|null $Accept
 * @property string $ContentType
 * @property string|null $CustomerIdentityToken
 * @property string|resource|\Psr\Http\Message\StreamInterface $Body
 */
class InvokeGlobalInferenceGatewayRequest extends Request
{
    /**
     * @param array{
     *     GatewayId: string,
     *     Accept?: string|null,
     *     ContentType: string,
     *     CustomerIdentityToken?: string|null,
     *     Body: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
