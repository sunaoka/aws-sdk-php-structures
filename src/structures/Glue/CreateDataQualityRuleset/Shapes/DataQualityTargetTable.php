<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDataQualityRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property string $DatabaseName
 * @property string|null $CatalogId
 */
class DataQualityTargetTable extends Shape
{
    /**
     * @param array{
     *     TableName: string,
     *     DatabaseName: string,
     *     CatalogId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
