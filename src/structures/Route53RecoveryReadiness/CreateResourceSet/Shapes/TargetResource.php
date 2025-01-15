<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateResourceSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NLBResource|null $NLBResource
 * @property R53ResourceRecord|null $R53Resource
 */
class TargetResource extends Shape
{
    /**
     * @param array{
     *     NLBResource?: NLBResource|null,
     *     R53Resource?: R53ResourceRecord|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
