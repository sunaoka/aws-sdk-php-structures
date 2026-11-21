<?php

namespace Sunaoka\Aws\Structures\AgentDiscovery\SearchPublicRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescriptorSourceUrl|null $fromUrl
 */
class DescriptorSource extends Shape
{
    /**
     * @param array{fromUrl?: DescriptorSourceUrl|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
