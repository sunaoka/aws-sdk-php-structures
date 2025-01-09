<?php

namespace Sunaoka\Aws\Structures\Connect\GetTrafficDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SignInDistribution> $Distributions
 */
class SignInConfig extends Shape
{
    /**
     * @param array{Distributions: list<SignInDistribution>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
