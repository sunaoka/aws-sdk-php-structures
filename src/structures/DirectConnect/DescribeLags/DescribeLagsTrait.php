<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLags;

trait DescribeLagsTrait
{
    /**
     * @param DescribeLagsRequest $args
     * @return DescribeLagsResponse
     */
    public function describeLags(DescribeLagsRequest $args)
    {
        $result = parent::describeLags($args->toArray());
        return new DescribeLagsResponse($result->toArray());
    }
}
