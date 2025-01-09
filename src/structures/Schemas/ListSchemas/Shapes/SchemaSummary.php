<?php

namespace Sunaoka\Aws\Structures\Schemas\ListSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $SchemaArn
 * @property string $SchemaName
 * @property array<string, string> $Tags
 * @property int $VersionCount
 */
class SchemaSummary extends Shape
{
    /**
     * @param array{
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     SchemaArn?: string,
     *     SchemaName?: string,
     *     Tags?: array<string, string>,
     *     VersionCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
