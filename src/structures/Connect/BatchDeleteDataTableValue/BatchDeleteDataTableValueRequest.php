<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDeleteDataTableValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 * @property list<Shapes\DataTableDeleteValueIdentifier> $Values
 */
class BatchDeleteDataTableValueRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string,
     *     Values: list<Shapes\DataTableDeleteValueIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
