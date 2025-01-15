<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationType
 * @property 'PARQUET'|'DELIMITED_TEXT'|null $s3DestinationExportFileFormat
 * @property array<string, string>|null $s3DestinationExportFileFormatOptions
 */
class DataViewDestinationTypeParams extends Shape
{
    /**
     * @param array{
     *     destinationType: string,
     *     s3DestinationExportFileFormat?: 'PARQUET'|'DELIMITED_TEXT'|null,
     *     s3DestinationExportFileFormatOptions?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
