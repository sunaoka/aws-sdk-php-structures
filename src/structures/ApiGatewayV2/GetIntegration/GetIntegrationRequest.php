<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $IntegrationId
 */
class GetIntegrationRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     IntegrationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
