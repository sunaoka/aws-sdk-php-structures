<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $WindowSize
 * @property bool $DetectSchema
 * @property string $Table
 * @property string $Database
 * @property KafkaStreamingSourceOptions $StreamingOptions
 * @property StreamingDataPreviewOptions $DataPreviewOptions
 */
class CatalogKafkaSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     WindowSize?: int,
     *     DetectSchema?: bool,
     *     Table: string,
     *     Database: string,
     *     StreamingOptions?: KafkaStreamingSourceOptions,
     *     DataPreviewOptions?: StreamingDataPreviewOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
