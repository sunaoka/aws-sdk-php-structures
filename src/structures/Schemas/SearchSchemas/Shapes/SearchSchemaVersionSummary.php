<?php

namespace Sunaoka\Aws\Structures\Schemas\SearchSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $SchemaVersion
 * @property string|null $Type
 */
class SearchSchemaVersionSummary extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     SchemaVersion?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
