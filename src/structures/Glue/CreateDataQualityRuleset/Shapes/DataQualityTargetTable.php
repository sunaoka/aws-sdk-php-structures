<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDataQualityRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property string $DatabaseName
 * @property string $CatalogId
 */
class DataQualityTargetTable extends Shape
{
    /**
     * @param array{
     *     TableName: string,
     *     DatabaseName: string,
     *     CatalogId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
