<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMovingAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $PublicIps
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property int<5, 1000>|null $MaxResults
 */
class DescribeMovingAddressesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     PublicIps?: list<string>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
