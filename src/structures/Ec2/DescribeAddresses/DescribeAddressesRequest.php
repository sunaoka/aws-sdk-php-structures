<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $PublicIps
 * @property list<string>|null $AllocationIds
 * @property bool|null $DryRun
 */
class DescribeAddressesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     PublicIps?: list<string>|null,
     *     AllocationIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
