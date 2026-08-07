<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\BatchGetDiscoverableRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 */
class DescriptorSourceFromUrl extends Shape
{
    /**
     * @param array{url: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
