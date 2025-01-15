<?php

namespace Sunaoka\Aws\Structures\Schemas\ListSchemaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SchemaArn
 * @property string|null $SchemaName
 * @property string|null $SchemaVersion
 * @property string|null $Type
 */
class SchemaVersionSummary extends Shape
{
    /**
     * @param array{
     *     SchemaArn?: string|null,
     *     SchemaName?: string|null,
     *     SchemaVersion?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
