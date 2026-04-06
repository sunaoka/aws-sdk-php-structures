<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListSchemaMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property bool $hasWorkflows
 * @property string $schemaArn
 * @property string $schemaName
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class SchemaMappingSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     hasWorkflows: bool,
     *     schemaArn: string,
     *     schemaName: string,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
