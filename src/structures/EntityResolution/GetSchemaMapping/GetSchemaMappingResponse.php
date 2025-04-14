<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetSchemaMapping;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $schemaName
 * @property string $schemaArn
 * @property string|null $description
 * @property list<Shapes\SchemaInputAttribute> $mappedInputFields
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 * @property bool $hasWorkflows
 */
class GetSchemaMappingResponse extends Response
{
}
