<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateSchemaMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property list<Shapes\SchemaInputAttribute> $mappedInputFields
 * @property string $schemaName
 * @property array<string, string>|null $tags
 */
class CreateSchemaMappingRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     mappedInputFields: list<Shapes\SchemaInputAttribute>,
     *     schemaName: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
