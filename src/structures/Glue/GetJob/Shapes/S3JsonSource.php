<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Paths
 * @property 'gzip'|'bzip2' $CompressionType
 * @property list<string> $Exclusions
 * @property string $GroupSize
 * @property string $GroupFiles
 * @property bool $Recurse
 * @property int $MaxBand
 * @property int $MaxFilesInBand
 * @property S3DirectSourceAdditionalOptions $AdditionalOptions
 * @property string $JsonPath
 * @property bool $Multiline
 * @property list<GlueSchema> $OutputSchemas
 */
class S3JsonSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Paths: list<string>,
     *     CompressionType?: 'gzip'|'bzip2',
     *     Exclusions?: list<string>,
     *     GroupSize?: string,
     *     GroupFiles?: string,
     *     Recurse?: bool,
     *     MaxBand?: int,
     *     MaxFilesInBand?: int,
     *     AdditionalOptions?: S3DirectSourceAdditionalOptions,
     *     JsonPath?: string,
     *     Multiline?: bool,
     *     OutputSchemas?: list<GlueSchema>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
