<?php

namespace Sunaoka\Aws\Structures\Schemas\CreateSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $SchemaArn
 * @property string|null $SchemaName
 * @property string|null $SchemaVersion
 * @property array<string, string>|null $Tags
 * @property string|null $Type
 * @property \Aws\Api\DateTimeResult|null $VersionCreatedDate
 */
class CreateSchemaResponse extends Response
{
}
