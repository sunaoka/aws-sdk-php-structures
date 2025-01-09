<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $StorageVirtualMachineIds
 * @property list<Shapes\StorageVirtualMachineFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeStorageVirtualMachinesRequest extends Request
{
    /**
     * @param array{
     *     StorageVirtualMachineIds?: list<string>,
     *     Filters?: list<Shapes\StorageVirtualMachineFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
