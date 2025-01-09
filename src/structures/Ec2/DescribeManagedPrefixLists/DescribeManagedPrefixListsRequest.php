<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeManagedPrefixLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property list<string> $PrefixListIds
 */
class DescribeManagedPrefixListsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     PrefixListIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
