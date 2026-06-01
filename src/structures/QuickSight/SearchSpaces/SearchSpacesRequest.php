<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchSpaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property list<Shapes\SpaceQuicksightSearchFilter> $Filters
 */
class SearchSpacesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     Filters: list<Shapes\SpaceQuicksightSearchFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
