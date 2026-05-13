<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomerEni
 * @property AdditionalEnis|null $AdditionalEnis
 */
class InstanceRequirementsEniConfiguration extends Shape
{
    /**
     * @param array{
     *     CustomerEni?: string|null,
     *     AdditionalEnis?: AdditionalEnis|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
