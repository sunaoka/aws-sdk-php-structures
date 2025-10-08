<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDimension;

trait DescribeDimensionTrait
{
    /**
     * @param DescribeDimensionRequest $args
     * @return DescribeDimensionResponse
     */
    public function describeDimension(DescribeDimensionRequest $args)
    {
        $result = parent::describeDimension($args->toArray());
        return new DescribeDimensionResponse($result->toArray());
    }
}
