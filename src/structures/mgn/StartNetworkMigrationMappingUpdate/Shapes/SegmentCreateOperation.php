<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $targetAccount
 * @property array<string, string>|null $scopeTags
 */
class SegmentCreateOperation extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     targetAccount?: string|null,
     *     scopeTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
