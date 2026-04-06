<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationOptIn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property list<string>|null $ColumnNames
 * @property ColumnWildcard|null $ColumnWildcard
 */
class TableWithColumnsResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     Name: string,
     *     ColumnNames?: list<string>|null,
     *     ColumnWildcard?: ColumnWildcard|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
