<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

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
 * @property 'comma'|'ctrla'|'pipe'|'semicolon'|'tab' $Separator
 * @property string|null $Escaper
 * @property 'quote'|'quillemet'|'single_quote'|'disabled' $QuoteChar
 * @property bool|null $Multiline
 * @property bool|null $WithHeader
 * @property bool|null $WriteHeader
 * @property bool|null $SkipFirst
 * @property bool|null $OptimizePerformance
 * @property list<GlueSchema>|null $OutputSchemas
 */
class S3CsvSource extends Shape
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
     *     Separator: 'comma'|'ctrla'|'pipe'|'semicolon'|'tab',
     *     Escaper?: string|null,
     *     QuoteChar: 'quote'|'quillemet'|'single_quote'|'disabled',
     *     Multiline?: bool|null,
     *     WithHeader?: bool|null,
     *     WriteHeader?: bool|null,
     *     SkipFirst?: bool|null,
     *     OptimizePerformance?: bool|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
