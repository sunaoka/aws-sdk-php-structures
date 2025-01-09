<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $WindowSize
 * @property bool $DetectSchema
 * @property KinesisStreamingSourceOptions $StreamingOptions
 * @property StreamingDataPreviewOptions $DataPreviewOptions
 */
class DirectKinesisSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     WindowSize?: int,
     *     DetectSchema?: bool,
     *     StreamingOptions?: KinesisStreamingSourceOptions,
     *     DataPreviewOptions?: StreamingDataPreviewOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
