<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceName
 * @property 'AWS_MARKETPLACE' $sourceId
 * @property string|null $sourceUrl
 * @property string $averageRating
 * @property int<0, max> $totalReviews
 */
class ReviewSourceSummary extends Shape
{
    /**
     * @param array{
     *     sourceName: string,
     *     sourceId: 'AWS_MARKETPLACE',
     *     sourceUrl?: string|null,
     *     averageRating: string,
     *     totalReviews: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
