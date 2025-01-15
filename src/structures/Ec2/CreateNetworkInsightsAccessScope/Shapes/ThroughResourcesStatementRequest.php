<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceStatementRequest|null $ResourceStatement
 */
class ThroughResourcesStatementRequest extends Shape
{
    /**
     * @param array{ResourceStatement?: ResourceStatementRequest|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
