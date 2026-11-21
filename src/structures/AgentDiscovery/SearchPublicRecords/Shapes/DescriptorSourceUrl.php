<?php

namespace Sunaoka\Aws\Structures\AgentDiscovery\SearchPublicRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 */
class DescriptorSourceUrl extends Shape
{
    /**
     * @param array{url: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
