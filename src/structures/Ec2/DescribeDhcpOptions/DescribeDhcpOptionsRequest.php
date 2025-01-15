<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDhcpOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $DhcpOptionsIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeDhcpOptionsRequest extends Request
{
    /**
     * @param array{
     *     DhcpOptionsIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
