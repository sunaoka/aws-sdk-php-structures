<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetResourceSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NLBResource $NLBResource
 * @property R53ResourceRecord $R53Resource
 */
class TargetResource extends Shape
{
    /**
     * @param array{
     *     NLBResource?: NLBResource,
     *     R53Resource?: R53ResourceRecord
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
