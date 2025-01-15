<?php

namespace Sunaoka\Aws\Structures\Glue\RemoveSchemaVersionMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SchemaArn
 * @property string|null $SchemaName
 * @property string|null $RegistryName
 * @property bool|null $LatestVersion
 * @property int<1, 100000>|null $VersionNumber
 * @property string|null $SchemaVersionId
 * @property string|null $MetadataKey
 * @property string|null $MetadataValue
 */
class RemoveSchemaVersionMetadataResponse extends Response
{
}
