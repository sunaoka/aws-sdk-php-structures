<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateSchemaMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $schemaName
 * @property string|null $description
 * @property list<Shapes\SchemaInputAttribute> $mappedInputFields
 */
class UpdateSchemaMappingRequest extends Request
{
    /**
     * @param array{
     *     schemaName: string,
     *     description?: string|null,
     *     mappedInputFields: list<Shapes\SchemaInputAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
