<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDhcpOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DhcpOptionsIds
 * @property string $NextToken
 * @property int<5, 1000> $MaxResults
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeDhcpOptionsRequest extends Request
{
    /**
     * @param array{
     *     DhcpOptionsIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<5, 1000>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
