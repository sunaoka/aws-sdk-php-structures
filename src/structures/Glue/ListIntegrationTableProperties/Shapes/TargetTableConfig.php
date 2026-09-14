<?php

namespace Sunaoka\Aws\Structures\Glue\ListIntegrationTableProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TOPLEVEL'|'FULL'|'NOUNNEST'|null $UnnestSpec
 * @property list<IntegrationPartition>|null $PartitionSpec
 * @property string|null $TargetTableName
 * @property string|null $IntegrationArn
 */
class TargetTableConfig extends Shape
{
    /**
     * @param array{
     *     UnnestSpec?: 'TOPLEVEL'|'FULL'|'NOUNNEST'|null,
     *     PartitionSpec?: list<IntegrationPartition>|null,
     *     TargetTableName?: string|null,
     *     IntegrationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
