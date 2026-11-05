<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $prefix
 * @property string|null $key
 * @property string|null $checksumCRC64NVME
 * @property array<'access'|'metadata'|'data'|'internal', int>|null $invalidFindings
 */
class ReportOverview extends Shape
{
    /**
     * @param array{
     *     prefix?: string|null,
     *     key?: string|null,
     *     checksumCRC64NVME?: string|null,
     *     invalidFindings?: array<'access'|'metadata'|'data'|'internal', int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
