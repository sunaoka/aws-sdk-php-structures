<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetSampleData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property list<string>|null $TemplatedPathList
 * @property list<string>|null $HistoricalDataPathList
 * @property FileFormatDescriptor $FileFormatDescriptor
 */
class SampleDataS3SourceConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     TemplatedPathList?: list<string>|null,
     *     HistoricalDataPathList?: list<string>|null,
     *     FileFormatDescriptor: FileFormatDescriptor
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
