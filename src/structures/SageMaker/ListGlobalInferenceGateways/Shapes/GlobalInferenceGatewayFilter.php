<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListGlobalInferenceGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Status' $Name
 * @property string $Value
 */
class GlobalInferenceGatewayFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'Status',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
