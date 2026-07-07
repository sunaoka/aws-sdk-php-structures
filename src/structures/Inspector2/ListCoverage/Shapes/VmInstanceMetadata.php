<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $tags
 * @property 'WINDOWS'|'LINUX'|'UNKNOWN'|null $platform
 * @property string|null $inventoryHash
 * @property string|null $vmImageReference
 */
class VmInstanceMetadata extends Shape
{
    /**
     * @param array{
     *     tags?: array<string, string>|null,
     *     platform?: 'WINDOWS'|'LINUX'|'UNKNOWN'|null,
     *     inventoryHash?: string|null,
     *     vmImageReference?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
