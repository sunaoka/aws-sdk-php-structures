<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTrafficDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Distribution> $Distributions
 */
class AgentConfig extends Shape
{
    /**
     * @param array{Distributions: list<Distribution>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
