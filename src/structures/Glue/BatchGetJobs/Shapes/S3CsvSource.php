<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Paths
 * @property 'gzip'|'bzip2' $CompressionType
 * @property list<string> $Exclusions
 * @property string $GroupSize
 * @property string $GroupFiles
 * @property bool $Recurse
 * @property int<0, max> $MaxBand
 * @property int<0, max> $MaxFilesInBand
 * @property S3DirectSourceAdditionalOptions $AdditionalOptions
 * @property 'comma'|'ctrla'|'pipe'|'semicolon'|'tab' $Separator
 * @property string $Escaper
 * @property 'quote'|'quillemet'|'single_quote'|'disabled' $QuoteChar
 * @property bool $Multiline
 * @property bool $WithHeader
 * @property bool $WriteHeader
 * @property bool $SkipFirst
 * @property bool $OptimizePerformance
 * @property list<GlueSchema> $OutputSchemas
 */
class S3CsvSource extends Shape
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
     *     MaxBand?: int<0, max>,
     *     MaxFilesInBand?: int<0, max>,
     *     AdditionalOptions?: S3DirectSourceAdditionalOptions,
     *     Separator: 'comma'|'ctrla'|'pipe'|'semicolon'|'tab',
     *     Escaper?: string,
     *     QuoteChar: 'quote'|'quillemet'|'single_quote'|'disabled',
     *     Multiline?: bool,
     *     WithHeader?: bool,
     *     WriteHeader?: bool,
     *     SkipFirst?: bool,
     *     OptimizePerformance?: bool,
     *     OutputSchemas?: list<GlueSchema>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
