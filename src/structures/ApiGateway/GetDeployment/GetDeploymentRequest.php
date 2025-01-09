<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $deploymentId
 * @property list<string> $embed
 */
class GetDeploymentRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     deploymentId: string,
     *     embed?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
