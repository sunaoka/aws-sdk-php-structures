<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeWatchlist;

trait DescribeWatchlistTrait
{
    /**
     * @param DescribeWatchlistRequest $args
     * @return DescribeWatchlistResponse
     */
    public function describeWatchlist(DescribeWatchlistRequest $args)
    {
        $result = parent::describeWatchlist($args->toArray());
        return new DescribeWatchlistResponse($result->toArray());
    }
}
