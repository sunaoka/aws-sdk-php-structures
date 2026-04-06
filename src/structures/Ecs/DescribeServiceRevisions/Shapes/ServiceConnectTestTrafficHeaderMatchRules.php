<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exact
 */
class ServiceConnectTestTrafficHeaderMatchRules extends Shape
{
    /**
     * @param array{exact: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
