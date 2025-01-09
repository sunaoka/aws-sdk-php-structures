<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $WindowSize
 * @property bool $DetectSchema
 * @property string $Table
 * @property string $Database
 * @property KinesisStreamingSourceOptions $StreamingOptions
 * @property StreamingDataPreviewOptions $DataPreviewOptions
 */
class CatalogKinesisSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     WindowSize?: int,
     *     DetectSchema?: bool,
     *     Table: string,
     *     Database: string,
     *     StreamingOptions?: KinesisStreamingSourceOptions,
     *     DataPreviewOptions?: StreamingDataPreviewOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
