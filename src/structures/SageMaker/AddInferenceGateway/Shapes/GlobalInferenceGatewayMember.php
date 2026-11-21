<?php

namespace Sunaoka\Aws\Structures\SageMaker\AddInferenceGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Namespace
 * @property string $ClusterArn
 */
class GlobalInferenceGatewayMember extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Namespace: string,
     *     ClusterArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
