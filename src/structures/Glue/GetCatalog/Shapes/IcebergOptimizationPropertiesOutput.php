<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property array<string, string>|null $Compaction
 * @property array<string, string>|null $Retention
 * @property array<string, string>|null $OrphanFileDeletion
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class IcebergOptimizationPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     Compaction?: array<string, string>|null,
     *     Retention?: array<string, string>|null,
     *     OrphanFileDeletion?: array<string, string>|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
