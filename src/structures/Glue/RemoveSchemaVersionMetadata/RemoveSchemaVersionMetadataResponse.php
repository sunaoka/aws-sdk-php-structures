<?php

namespace Sunaoka\Aws\Structures\Glue\RemoveSchemaVersionMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SchemaArn
 * @property string $SchemaName
 * @property string $RegistryName
 * @property bool $LatestVersion
 * @property int<1, 100000> $VersionNumber
 * @property string $SchemaVersionId
 * @property string $MetadataKey
 * @property string $MetadataValue
 */
class RemoveSchemaVersionMetadataResponse extends Response
{
}
