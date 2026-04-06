<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $PublicIps
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $AllocationIds
 */
class DescribeAddressesRequest extends Request
{
    /**
     * @param array{
     *     PublicIps?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     AllocationIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
