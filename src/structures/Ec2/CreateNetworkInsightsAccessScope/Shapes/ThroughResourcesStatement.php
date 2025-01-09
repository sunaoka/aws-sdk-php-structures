<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceStatement $ResourceStatement
 */
class ThroughResourcesStatement extends Shape
{
    /**
     * @param array{ResourceStatement?: ResourceStatement} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
