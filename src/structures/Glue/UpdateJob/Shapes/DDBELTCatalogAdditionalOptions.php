<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DynamodbExport
 * @property bool|null $DynamodbUnnestDDBJson
 */
class DDBELTCatalogAdditionalOptions extends Shape
{
    /**
     * @param array{
     *     DynamodbExport?: string|null,
     *     DynamodbUnnestDDBJson?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
