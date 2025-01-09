<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFlowLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'plain-text'|'parquet' $FileFormat
 * @property bool $HiveCompatiblePartitions
 * @property bool $PerHourPartition
 */
class DestinationOptionsResponse extends Shape
{
    /**
     * @param array{
     *     FileFormat?: 'plain-text'|'parquet',
     *     HiveCompatiblePartitions?: bool,
     *     PerHourPartition?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
