<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ServiceConnectTestTrafficHeaderMatchRules|null $value
 */
class ServiceConnectTestTrafficHeaderRules extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value?: ServiceConnectTestTrafficHeaderMatchRules|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
