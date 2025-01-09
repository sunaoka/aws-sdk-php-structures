<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetDataCellsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableCatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $Name
 */
class GetDataCellsFilterRequest extends Request
{
    /**
     * @param array{
     *     TableCatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
