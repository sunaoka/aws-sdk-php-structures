<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $DeploymentId
 * @property string $Description
 */
class UpdateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     DeploymentId: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
