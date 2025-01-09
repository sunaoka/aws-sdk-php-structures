<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetSchemaMapping;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property bool $hasWorkflows
 * @property list<Shapes\SchemaInputAttribute> $mappedInputFields
 * @property string $schemaArn
 * @property string $schemaName
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetSchemaMappingResponse extends Response
{
}
