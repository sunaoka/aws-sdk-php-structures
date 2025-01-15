<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SearchString
 * @property Shapes\DateInterval $TimePeriod
 * @property string|null $TagKey
 * @property Shapes\Expression|null $Filter
 * @property list<Shapes\SortDefinition>|null $SortBy
 * @property string|null $BillingViewArn
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextPageToken
 */
class GetTagsRequest extends Request
{
    /**
     * @param array{
     *     SearchString?: string|null,
     *     TimePeriod: Shapes\DateInterval,
     *     TagKey?: string|null,
     *     Filter?: Shapes\Expression|null,
     *     SortBy?: list<Shapes\SortDefinition>|null,
     *     BillingViewArn?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     NextPageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
