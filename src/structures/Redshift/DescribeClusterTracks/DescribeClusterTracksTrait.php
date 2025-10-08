<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterTracks;

trait DescribeClusterTracksTrait
{
    /**
     * @param DescribeClusterTracksRequest $args
     * @return DescribeClusterTracksResponse
     */
    public function describeClusterTracks(DescribeClusterTracksRequest $args)
    {
        $result = parent::describeClusterTracks($args->toArray());
        return new DescribeClusterTracksResponse($result->toArray());
    }
}
