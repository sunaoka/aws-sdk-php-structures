<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeGeofenceCollection;

trait DescribeGeofenceCollectionTrait
{
    /**
     * @param DescribeGeofenceCollectionRequest $args
     * @return DescribeGeofenceCollectionResponse
     */
    public function describeGeofenceCollection(DescribeGeofenceCollectionRequest $args)
    {
        $result = parent::describeGeofenceCollection($args->toArray());
        return new DescribeGeofenceCollectionResponse($result->toArray());
    }
}
