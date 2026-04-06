<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDhcpOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $DhcpOptionsIds
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 */
class DescribeDhcpOptionsRequest extends Request
{
    /**
     * @param array{
     *     DhcpOptionsIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
