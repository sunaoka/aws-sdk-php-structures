<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property KafkaStreamingSourceOptions|null $StreamingOptions
 * @property int<0, max>|null $WindowSize
 * @property bool|null $DetectSchema
 * @property StreamingDataPreviewOptions|null $DataPreviewOptions
 */
class DirectKafkaSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     StreamingOptions?: KafkaStreamingSourceOptions|null,
     *     WindowSize?: int<0, max>|null,
     *     DetectSchema?: bool|null,
     *     DataPreviewOptions?: StreamingDataPreviewOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
