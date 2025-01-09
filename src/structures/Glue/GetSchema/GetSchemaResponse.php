<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistryName
 * @property string $RegistryArn
 * @property string $SchemaName
 * @property string $SchemaArn
 * @property string $Description
 * @property 'AVRO'|'JSON'|'PROTOBUF' $DataFormat
 * @property 'NONE'|'DISABLED'|'BACKWARD'|'BACKWARD_ALL'|'FORWARD'|'FORWARD_ALL'|'FULL'|'FULL_ALL' $Compatibility
 * @property int<1, 100000> $SchemaCheckpoint
 * @property int<1, 100000> $LatestSchemaVersion
 * @property int<1, 100000> $NextSchemaVersion
 * @property 'AVAILABLE'|'PENDING'|'DELETING' $SchemaStatus
 * @property string $CreatedTime
 * @property string $UpdatedTime
 */
class GetSchemaResponse extends Response
{
}
