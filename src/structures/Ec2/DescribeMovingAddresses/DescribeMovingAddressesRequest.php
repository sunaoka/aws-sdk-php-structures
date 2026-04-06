<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMovingAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $PublicIps
 */
class DescribeMovingAddressesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     PublicIps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
