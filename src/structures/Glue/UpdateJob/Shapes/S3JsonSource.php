<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Paths
 * @property 'gzip'|'bzip2'|null $CompressionType
 * @property list<string>|null $Exclusions
 * @property string|null $GroupSize
 * @property string|null $GroupFiles
 * @property bool|null $Recurse
 * @property int<0, max>|null $MaxBand
 * @property int<0, max>|null $MaxFilesInBand
 * @property S3DirectSourceAdditionalOptions|null $AdditionalOptions
 * @property string|null $JsonPath
 * @property bool|null $Multiline
 * @property list<GlueSchema>|null $OutputSchemas
 */
class S3JsonSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Paths: list<string>,
     *     CompressionType?: 'gzip'|'bzip2'|null,
     *     Exclusions?: list<string>|null,
     *     GroupSize?: string|null,
     *     GroupFiles?: string|null,
     *     Recurse?: bool|null,
     *     MaxBand?: int<0, max>|null,
     *     MaxFilesInBand?: int<0, max>|null,
     *     AdditionalOptions?: S3DirectSourceAdditionalOptions|null,
     *     JsonPath?: string|null,
     *     Multiline?: bool|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
