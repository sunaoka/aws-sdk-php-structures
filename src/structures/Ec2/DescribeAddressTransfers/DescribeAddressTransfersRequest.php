<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddressTransfers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AllocationIds
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 */
class DescribeAddressTransfersRequest extends Request
{
    /**
     * @param array{
     *     AllocationIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
