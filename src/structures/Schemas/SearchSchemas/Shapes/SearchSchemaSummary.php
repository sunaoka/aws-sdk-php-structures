<?php

namespace Sunaoka\Aws\Structures\Schemas\SearchSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistryName
 * @property string $SchemaArn
 * @property string $SchemaName
 * @property list<SearchSchemaVersionSummary> $SchemaVersions
 */
class SearchSchemaSummary extends Shape
{
    /**
     * @param array{
     *     RegistryName?: string,
     *     SchemaArn?: string,
     *     SchemaName?: string,
     *     SchemaVersions?: list<SearchSchemaVersionSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
