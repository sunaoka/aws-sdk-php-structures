<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $targetAccount
 * @property array<string, string>|null $scopeTags
 */
class SegmentUpdateOperation extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     targetAccount?: string|null,
     *     scopeTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
