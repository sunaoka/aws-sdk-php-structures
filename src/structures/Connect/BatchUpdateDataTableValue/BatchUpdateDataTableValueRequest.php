<?php

namespace Sunaoka\Aws\Structures\Connect\BatchUpdateDataTableValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 * @property list<Shapes\DataTableValue> $Values
 */
class BatchUpdateDataTableValueRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string,
     *     Values: list<Shapes\DataTableValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
