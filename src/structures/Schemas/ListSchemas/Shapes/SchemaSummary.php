<?php

namespace Sunaoka\Aws\Structures\Schemas\ListSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $SchemaArn
 * @property string|null $SchemaName
 * @property array<string, string>|null $Tags
 * @property int|null $VersionCount
 */
class SchemaSummary extends Shape
{
    /**
     * @param array{
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     SchemaArn?: string|null,
     *     SchemaName?: string|null,
     *     Tags?: array<string, string>|null,
     *     VersionCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
