<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityEvaluationConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string|null $DatabaseName
 * @property string|null $TableNamePattern
 */
class DataQualityEvaluationConfigListGlueTables extends Shape
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName?: string|null,
     *     TableNamePattern?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
