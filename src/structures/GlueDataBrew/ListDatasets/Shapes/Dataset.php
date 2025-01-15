<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string $Name
 * @property 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC'|null $Format
 * @property FormatOptions|null $FormatOptions
 * @property Input $Input
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LastModifiedBy
 * @property 'S3'|'DATA-CATALOG'|'DATABASE'|null $Source
 * @property PathOptions|null $PathOptions
 * @property array<string, string>|null $Tags
 * @property string|null $ResourceArn
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CreatedBy?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     Name: string,
     *     Format?: 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC'|null,
     *     FormatOptions?: FormatOptions|null,
     *     Input: Input,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: string|null,
     *     Source?: 'S3'|'DATA-CATALOG'|'DATABASE'|null,
     *     PathOptions?: PathOptions|null,
     *     Tags?: array<string, string>|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
