<?php

namespace Sunaoka\Aws\Structures\SageMaker\RemoveInferenceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $ClusterArn
 * @property string $Namespace
 * @property string $Name
 */
class RemoveInferenceGatewayRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     ClusterArn: string,
     *     Namespace: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
