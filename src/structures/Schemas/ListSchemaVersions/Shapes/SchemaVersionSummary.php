<?php

namespace Sunaoka\Aws\Structures\Schemas\ListSchemaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaArn
 * @property string $SchemaName
 * @property string $SchemaVersion
 * @property string $Type
 */
class SchemaVersionSummary extends Shape
{
    /**
     * @param array{
     *     SchemaArn?: string,
     *     SchemaName?: string,
     *     SchemaVersion?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
