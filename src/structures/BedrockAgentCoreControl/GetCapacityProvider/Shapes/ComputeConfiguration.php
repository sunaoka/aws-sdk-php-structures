<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2Configuration|null $ec2Configuration
 */
class ComputeConfiguration extends Shape
{
    /**
     * @param array{ec2Configuration?: Ec2Configuration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
