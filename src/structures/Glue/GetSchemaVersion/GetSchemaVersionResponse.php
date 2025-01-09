<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SchemaVersionId
 * @property string $SchemaDefinition
 * @property 'AVRO'|'JSON'|'PROTOBUF' $DataFormat
 * @property string $SchemaArn
 * @property int $VersionNumber
 * @property 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING' $Status
 * @property string $CreatedTime
 */
class GetSchemaVersionResponse extends Response
{
}
