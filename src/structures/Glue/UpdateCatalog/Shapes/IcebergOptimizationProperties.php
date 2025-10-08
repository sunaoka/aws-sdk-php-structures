<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property array<string, string>|null $Compaction
 * @property array<string, string>|null $Retention
 * @property array<string, string>|null $OrphanFileDeletion
 */
class IcebergOptimizationProperties extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     Compaction?: array<string, string>|null,
     *     Retention?: array<string, string>|null,
     *     OrphanFileDeletion?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
