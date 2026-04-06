<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListSchemaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SchemaId
 * @property 'capability'|'definition'|null $Type
 * @property string|null $Description
 * @property string|null $Namespace
 * @property string|null $SemanticVersion
 * @property 'PUBLIC'|'PRIVATE'|null $Visibility
 */
class SchemaVersionListItem extends Shape
{
    /**
     * @param array{
     *     SchemaId?: string|null,
     *     Type?: 'capability'|'definition'|null,
     *     Description?: string|null,
     *     Namespace?: string|null,
     *     SemanticVersion?: string|null,
     *     Visibility?: 'PUBLIC'|'PRIVATE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
