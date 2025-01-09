<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchString
 * @property Shapes\DateInterval $TimePeriod
 * @property string $TagKey
 * @property Shapes\Expression $Filter
 * @property list<Shapes\SortDefinition> $SortBy
 * @property string $BillingViewArn
 * @property int<1, max> $MaxResults
 * @property string $NextPageToken
 */
class GetTagsRequest extends Request
{
    /**
     * @param array{
     *     SearchString?: string,
     *     TimePeriod: Shapes\DateInterval,
     *     TagKey?: string,
     *     Filter?: Shapes\Expression,
     *     SortBy?: list<Shapes\SortDefinition>,
     *     BillingViewArn?: string,
     *     MaxResults?: int<1, max>,
     *     NextPageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
