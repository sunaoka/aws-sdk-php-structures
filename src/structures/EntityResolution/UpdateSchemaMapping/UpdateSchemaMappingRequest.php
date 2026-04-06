<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateSchemaMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property list<Shapes\SchemaInputAttribute> $mappedInputFields
 * @property string $schemaName
 */
class UpdateSchemaMappingRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     mappedInputFields: list<Shapes\SchemaInputAttribute>,
     *     schemaName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
