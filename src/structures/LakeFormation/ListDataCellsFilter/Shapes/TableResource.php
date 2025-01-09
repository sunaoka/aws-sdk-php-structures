<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListDataCellsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property TableWildcard $TableWildcard
 */
class TableResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     Name?: string,
     *     TableWildcard?: TableWildcard
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
