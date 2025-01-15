<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SchemaVersionId
 * @property string|null $SchemaDefinition
 * @property 'AVRO'|'JSON'|'PROTOBUF'|null $DataFormat
 * @property string|null $SchemaArn
 * @property int<1, 100000>|null $VersionNumber
 * @property 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING'|null $Status
 * @property string|null $CreatedTime
 */
class GetSchemaVersionResponse extends Response
{
}
