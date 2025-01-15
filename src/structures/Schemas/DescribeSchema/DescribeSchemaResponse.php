<?php

namespace Sunaoka\Aws\Structures\Schemas\DescribeSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Content
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $SchemaArn
 * @property string|null $SchemaName
 * @property string|null $SchemaVersion
 * @property array<string, string>|null $Tags
 * @property string|null $Type
 * @property \Aws\Api\DateTimeResult|null $VersionCreatedDate
 */
class DescribeSchemaResponse extends Response
{
}
