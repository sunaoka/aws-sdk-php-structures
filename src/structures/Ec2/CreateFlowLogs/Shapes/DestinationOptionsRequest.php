<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFlowLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'plain-text'|'parquet'|null $FileFormat
 * @property bool|null $HiveCompatiblePartitions
 * @property bool|null $PerHourPartition
 */
class DestinationOptionsRequest extends Shape
{
    /**
     * @param array{
     *     FileFormat?: 'plain-text'|'parquet'|null,
     *     HiveCompatiblePartitions?: bool|null,
     *     PerHourPartition?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
