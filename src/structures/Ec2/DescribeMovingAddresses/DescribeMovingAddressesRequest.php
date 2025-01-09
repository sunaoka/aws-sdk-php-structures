<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMovingAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $PublicIps
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 */
class DescribeMovingAddressesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PublicIps?: list<string>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
