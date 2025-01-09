<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistryName
 * @property string $RegistryArn
 * @property string $SchemaName
 * @property string $SchemaArn
 * @property string $Description
 * @property 'AVRO'|'JSON'|'PROTOBUF' $DataFormat
 * @property 'NONE'|'DISABLED'|'BACKWARD'|'BACKWARD_ALL'|'FORWARD'|'FORWARD_ALL'|'FULL'|'FULL_ALL' $Compatibility
 * @property int $SchemaCheckpoint
 * @property int $LatestSchemaVersion
 * @property int $NextSchemaVersion
 * @property 'AVAILABLE'|'PENDING'|'DELETING' $SchemaStatus
 * @property array<string, string> $Tags
 * @property string $SchemaVersionId
 * @property 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING' $SchemaVersionStatus
 */
class CreateSchemaResponse extends Response
{
}
