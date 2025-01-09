<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationTableProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TOPLEVEL'|'FULL'|'NOUNNEST' $UnnestSpec
 * @property list<IntegrationPartition> $PartitionSpec
 * @property string $TargetTableName
 */
class TargetTableConfig extends Shape
{
    /**
     * @param array{
     *     UnnestSpec?: 'TOPLEVEL'|'FULL'|'NOUNNEST',
     *     PartitionSpec?: list<IntegrationPartition>,
     *     TargetTableName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
