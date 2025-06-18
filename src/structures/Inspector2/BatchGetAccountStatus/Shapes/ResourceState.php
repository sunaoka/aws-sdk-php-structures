<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property State|null $codeRepository
 * @property State $ec2
 * @property State $ecr
 * @property State|null $lambda
 * @property State|null $lambdaCode
 */
class ResourceState extends Shape
{
    /**
     * @param array{
     *     codeRepository?: State|null,
     *     ec2: State,
     *     ecr: State,
     *     lambda?: State|null,
     *     lambdaCode?: State|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
