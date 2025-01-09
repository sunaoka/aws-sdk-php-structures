<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetSampleData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property list<string> $TemplatedPathList
 * @property list<string> $HistoricalDataPathList
 * @property FileFormatDescriptor $FileFormatDescriptor
 */
class SampleDataS3SourceConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     TemplatedPathList?: list<string>,
     *     HistoricalDataPathList?: list<string>,
     *     FileFormatDescriptor: FileFormatDescriptor
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
