<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Status'|'ClusterArn' $Name
 * @property string $Value
 */
class GlobalInferenceGatewayMemberFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'Status'|'ClusterArn',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
