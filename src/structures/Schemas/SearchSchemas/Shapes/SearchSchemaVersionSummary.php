<?php

namespace Sunaoka\Aws\Structures\Schemas\SearchSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $SchemaVersion
 * @property string $Type
 */
class SearchSchemaVersionSummary extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     SchemaVersion?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
