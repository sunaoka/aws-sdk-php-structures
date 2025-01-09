<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Paths
 * @property 'snappy'|'lzo'|'gzip'|'uncompressed'|'none' $CompressionType
 * @property list<string> $Exclusions
 * @property string $GroupSize
 * @property string $GroupFiles
 * @property bool $Recurse
 * @property int<0, max> $MaxBand
 * @property int<0, max> $MaxFilesInBand
 * @property S3DirectSourceAdditionalOptions $AdditionalOptions
 * @property list<GlueSchema> $OutputSchemas
 */
class S3ParquetSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Paths: list<string>,
     *     CompressionType?: 'snappy'|'lzo'|'gzip'|'uncompressed'|'none',
     *     Exclusions?: list<string>,
     *     GroupSize?: string,
     *     GroupFiles?: string,
     *     Recurse?: bool,
     *     MaxBand?: int<0, max>,
     *     MaxFilesInBand?: int<0, max>,
     *     AdditionalOptions?: S3DirectSourceAdditionalOptions,
     *     OutputSchemas?: list<GlueSchema>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
