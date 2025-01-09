<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $DeploymentId
 */
class DeleteDeploymentRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     DeploymentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
