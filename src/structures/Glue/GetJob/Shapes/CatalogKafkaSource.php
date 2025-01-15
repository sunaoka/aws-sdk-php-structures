<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int<0, max>|null $WindowSize
 * @property bool|null $DetectSchema
 * @property string $Table
 * @property string $Database
 * @property KafkaStreamingSourceOptions|null $StreamingOptions
 * @property StreamingDataPreviewOptions|null $DataPreviewOptions
 */
class CatalogKafkaSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     WindowSize?: int<0, max>|null,
     *     DetectSchema?: bool|null,
     *     Table: string,
     *     Database: string,
     *     StreamingOptions?: KafkaStreamingSourceOptions|null,
     *     DataPreviewOptions?: StreamingDataPreviewOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
