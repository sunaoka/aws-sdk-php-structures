<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegrationResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $IntegrationId
 * @property string $IntegrationResponseId
 */
class GetIntegrationResponseRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     IntegrationId: string,
     *     IntegrationResponseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
