<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLakeFormationOptIn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property list<string> $ColumnNames
 * @property ColumnWildcard $ColumnWildcard
 */
class TableWithColumnsResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     Name: string,
     *     ColumnNames?: list<string>,
     *     ColumnWildcard?: ColumnWildcard
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
