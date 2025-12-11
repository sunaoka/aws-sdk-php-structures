<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteDataTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 */
class DeleteDataTableRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
