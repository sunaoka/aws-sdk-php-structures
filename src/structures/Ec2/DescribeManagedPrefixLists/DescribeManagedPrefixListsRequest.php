<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeManagedPrefixLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $PrefixListIds
 */
class DescribeManagedPrefixListsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     PrefixListIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
