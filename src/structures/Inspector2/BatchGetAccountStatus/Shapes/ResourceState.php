<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property State $ec2
 * @property State $ecr
 * @property State $lambda
 * @property State $lambdaCode
 */
class ResourceState extends Shape
{
    /**
     * @param array{
     *     ec2: State,
     *     ecr: State,
     *     lambda?: State,
     *     lambdaCode?: State
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
