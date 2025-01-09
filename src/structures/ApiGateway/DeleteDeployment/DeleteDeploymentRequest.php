<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $deploymentId
 */
class DeleteDeploymentRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     deploymentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
