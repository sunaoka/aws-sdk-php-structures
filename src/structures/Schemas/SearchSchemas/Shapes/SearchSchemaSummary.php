<?php

namespace Sunaoka\Aws\Structures\Schemas\SearchSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegistryName
 * @property string|null $SchemaArn
 * @property string|null $SchemaName
 * @property list<SearchSchemaVersionSummary>|null $SchemaVersions
 */
class SearchSchemaSummary extends Shape
{
    /**
     * @param array{
     *     RegistryName?: string|null,
     *     SchemaArn?: string|null,
     *     SchemaName?: string|null,
     *     SchemaVersions?: list<SearchSchemaVersionSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
