<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property KafkaStreamingSourceOptions $StreamingOptions
 * @property int<0, max> $WindowSize
 * @property bool $DetectSchema
 * @property StreamingDataPreviewOptions $DataPreviewOptions
 */
class DirectKafkaSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     StreamingOptions?: KafkaStreamingSourceOptions,
     *     WindowSize?: int<0, max>,
     *     DetectSchema?: bool,
     *     DataPreviewOptions?: StreamingDataPreviewOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
