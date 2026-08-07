<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\BatchGetDiscoverableRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescriptorSourceFromUrl|null $fromUrl
 */
class DescriptorSource extends Shape
{
    /**
     * @param array{fromUrl?: DescriptorSourceFromUrl|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
