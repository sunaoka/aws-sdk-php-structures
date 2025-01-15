<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaByDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SchemaVersionId
 * @property string|null $SchemaArn
 * @property 'AVRO'|'JSON'|'PROTOBUF'|null $DataFormat
 * @property 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING'|null $Status
 * @property string|null $CreatedTime
 */
class GetSchemaByDefinitionResponse extends Response
{
}
