<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $IntegrationId
 */
class DeleteIntegrationRequest extends Request
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
