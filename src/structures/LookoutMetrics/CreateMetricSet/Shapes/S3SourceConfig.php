<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property list<string>|null $TemplatedPathList
 * @property list<string>|null $HistoricalDataPathList
 * @property FileFormatDescriptor|null $FileFormatDescriptor
 */
class S3SourceConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     TemplatedPathList?: list<string>|null,
     *     HistoricalDataPathList?: list<string>|null,
     *     FileFormatDescriptor?: FileFormatDescriptor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
