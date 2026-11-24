<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachinePeers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $StorageVirtualMachinePeerIds
 * @property list<Shapes\StorageVirtualMachinePeerFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeStorageVirtualMachinePeersRequest extends Request
{
    /**
     * @param array{
     *     StorageVirtualMachinePeerIds?: list<string>|null,
     *     Filters?: list<Shapes\StorageVirtualMachinePeerFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
