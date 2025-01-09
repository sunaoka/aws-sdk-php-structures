<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDataViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationType
 * @property 'PARQUET'|'DELIMITED_TEXT' $s3DestinationExportFileFormat
 * @property array<string, string> $s3DestinationExportFileFormatOptions
 */
class DataViewDestinationTypeParams extends Shape
{
    /**
     * @param array{
     *     destinationType: string,
     *     s3DestinationExportFileFormat?: 'PARQUET'|'DELIMITED_TEXT',
     *     s3DestinationExportFileFormatOptions?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
