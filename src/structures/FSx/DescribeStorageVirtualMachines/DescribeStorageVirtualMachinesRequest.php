<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $StorageVirtualMachineIds
 * @property list<Shapes\StorageVirtualMachineFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeStorageVirtualMachinesRequest extends Request
{
    /**
     * @param array{
     *     StorageVirtualMachineIds?: list<string>|null,
     *     Filters?: list<Shapes\StorageVirtualMachineFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
