<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\SearchAppsFilter> $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class SearchAppsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\SearchAppsFilter>,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
