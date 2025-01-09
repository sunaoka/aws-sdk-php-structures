<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetResourceLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableCatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $Name
 */
class DataCellsFilterResource extends Shape
{
    /**
     * @param array{
     *     TableCatalogId?: string,
     *     DatabaseName?: string,
     *     TableName?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
