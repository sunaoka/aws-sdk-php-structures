<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string $Name
 * @property 'CSV'|'JSON'|'PARQUET'|'EXCEL'|'ORC'|null $Format
 * @property Shapes\FormatOptions|null $FormatOptions
 * @property Shapes\Input $Input
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LastModifiedBy
 * @property 'S3'|'DATA-CATALOG'|'DATABASE'|null $Source
 * @property Shapes\PathOptions|null $PathOptions
 * @property array<string, string>|null $Tags
 * @property string|null $ResourceArn
 */
class DescribeDatasetResponse extends Response
{
}
