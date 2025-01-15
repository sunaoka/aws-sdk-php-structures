<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteColumnStatisticsForTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $ColumnName
 */
class DeleteColumnStatisticsForTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     ColumnName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
