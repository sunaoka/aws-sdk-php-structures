<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $Name
 * @property 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC' $Format
 * @property Shapes\FormatOptions $FormatOptions
 * @property Shapes\Input $Input
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedBy
 * @property 'S3'|'DATA-CATALOG'|'DATABASE' $Source
 * @property Shapes\PathOptions $PathOptions
 * @property array<string, string> $Tags
 * @property string $ResourceArn
 */
class DescribeDatasetResponse extends Response
{
}
