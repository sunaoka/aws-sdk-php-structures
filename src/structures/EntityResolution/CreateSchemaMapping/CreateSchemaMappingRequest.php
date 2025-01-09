<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateSchemaMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property list<Shapes\SchemaInputAttribute> $mappedInputFields
 * @property string $schemaName
 * @property array<string, string> $tags
 */
class CreateSchemaMappingRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     mappedInputFields: list<Shapes\SchemaInputAttribute>,
     *     schemaName: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
