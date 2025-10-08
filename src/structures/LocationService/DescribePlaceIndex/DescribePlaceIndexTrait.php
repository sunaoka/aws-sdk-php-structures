<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribePlaceIndex;

trait DescribePlaceIndexTrait
{
    /**
     * @param DescribePlaceIndexRequest $args
     * @return DescribePlaceIndexResponse
     */
    public function describePlaceIndex(DescribePlaceIndexRequest $args)
    {
        $result = parent::describePlaceIndex($args->toArray());
        return new DescribePlaceIndexResponse($result->toArray());
    }
}
