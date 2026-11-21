<?php

namespace Sunaoka\Aws\Structures\AgentDiscovery\SearchPublicRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $data
 * @property string|null $version
 * @property DescriptorSource|null $source
 * @property array<string, DescriptorEntry>|null $additionalData
 */
class DescriptorEntry extends Shape
{
    /**
     * @param array{
     *     data?: string|null,
     *     version?: string|null,
     *     source?: DescriptorSource|null,
     *     additionalData?: array<string, DescriptorEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
