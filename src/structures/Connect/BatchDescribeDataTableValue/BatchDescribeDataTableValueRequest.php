<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDescribeDataTableValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 * @property list<Shapes\DataTableValueIdentifier> $Values
 */
class BatchDescribeDataTableValueRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string,
     *     Values: list<Shapes\DataTableValueIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
