<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property bool|null $excluded
 * @property array<string, string>|null $properties
 */
class UpdateOperation extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     excluded?: bool|null,
     *     properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
