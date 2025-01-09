<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $Name
 * @property 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC' $Format
 * @property FormatOptions $FormatOptions
 * @property Input $Input
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedBy
 * @property 'S3'|'DATA-CATALOG'|'DATABASE' $Source
 * @property PathOptions $PathOptions
 * @property array<string, string> $Tags
 * @property string $ResourceArn
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CreatedBy?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     Format?: 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC',
     *     FormatOptions?: FormatOptions,
     *     Input: Input,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: string,
     *     Source?: 'S3'|'DATA-CATALOG'|'DATABASE',
     *     PathOptions?: PathOptions,
     *     Tags?: array<string, string>,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
