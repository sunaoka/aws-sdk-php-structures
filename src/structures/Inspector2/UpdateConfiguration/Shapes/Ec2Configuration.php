<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2_SSM_AGENT_BASED'|'EC2_HYBRID' $scanMode
 */
class Ec2Configuration extends Shape
{
    /**
     * @param array{scanMode: 'EC2_SSM_AGENT_BASED'|'EC2_HYBRID'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
