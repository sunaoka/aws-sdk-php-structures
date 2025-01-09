<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PublicIps
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $AllocationIds
 */
class DescribeAddressesRequest extends Request
{
    /**
     * @param array{
     *     PublicIps?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     AllocationIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
