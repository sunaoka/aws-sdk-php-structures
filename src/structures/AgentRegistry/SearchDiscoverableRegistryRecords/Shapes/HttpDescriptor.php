<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescriptorSource|null $source
 */
class HttpDescriptor extends Shape
{
    /**
     * @param array{source?: DescriptorSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
