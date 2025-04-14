<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateSchemaMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $schemaName
 * @property string|null $description
 * @property list<Shapes\SchemaInputAttribute> $mappedInputFields
 * @property array<string, string>|null $tags
 */
class CreateSchemaMappingRequest extends Request
{
    /**
     * @param array{
     *     schemaName: string,
     *     description?: string|null,
     *     mappedInputFields: list<Shapes\SchemaInputAttribute>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
