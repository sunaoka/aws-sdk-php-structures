<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteDataCellsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TableCatalogId
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property string|null $Name
 */
class DeleteDataCellsFilterRequest extends Request
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
