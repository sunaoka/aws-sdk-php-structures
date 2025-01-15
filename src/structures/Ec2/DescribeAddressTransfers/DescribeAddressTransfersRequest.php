<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddressTransfers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AllocationIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property bool|null $DryRun
 */
class DescribeAddressTransfersRequest extends Request
{
    /**
     * @param array{
     *     AllocationIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
