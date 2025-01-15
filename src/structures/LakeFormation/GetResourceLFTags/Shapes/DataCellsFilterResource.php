<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetResourceLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableCatalogId
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property string|null $Name
 */
class DataCellsFilterResource extends Shape
{
    /**
     * @param array{
     *     TableCatalogId?: string|null,
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
