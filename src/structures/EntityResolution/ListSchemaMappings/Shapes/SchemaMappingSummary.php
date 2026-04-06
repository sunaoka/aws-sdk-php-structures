<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListSchemaMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $schemaName
 * @property string $schemaArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property bool $hasWorkflows
 */
class SchemaMappingSummary extends Shape
{
    /**
     * @param array{
     *     schemaName: string,
     *     schemaArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     hasWorkflows: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
