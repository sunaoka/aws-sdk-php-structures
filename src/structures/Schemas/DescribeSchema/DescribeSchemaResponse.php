<?php

namespace Sunaoka\Aws\Structures\Schemas\DescribeSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Content
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $SchemaArn
 * @property string $SchemaName
 * @property string $SchemaVersion
 * @property array<string, string> $Tags
 * @property string $Type
 * @property \Aws\Api\DateTimeResult $VersionCreatedDate
 */
class DescribeSchemaResponse extends Response
{
}
