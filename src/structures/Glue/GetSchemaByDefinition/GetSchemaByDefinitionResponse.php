<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaByDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SchemaVersionId
 * @property string $SchemaArn
 * @property 'AVRO'|'JSON'|'PROTOBUF' $DataFormat
 * @property 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING' $Status
 * @property string $CreatedTime
 */
class GetSchemaByDefinitionResponse extends Response
{
}
