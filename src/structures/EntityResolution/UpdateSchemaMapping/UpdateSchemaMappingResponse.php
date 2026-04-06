<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateSchemaMapping;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $schemaName
 * @property string $schemaArn
 * @property string|null $description
 * @property list<Shapes\SchemaInputAttribute> $mappedInputFields
 */
class UpdateSchemaMappingResponse extends Response
{
}
