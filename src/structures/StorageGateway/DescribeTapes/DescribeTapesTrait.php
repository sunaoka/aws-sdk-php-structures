<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapes;

trait DescribeTapesTrait
{
    /**
     * @param DescribeTapesRequest $args
     * @return DescribeTapesResponse
     */
    public function describeTapes(DescribeTapesRequest $args)
    {
        $result = parent::describeTapes($args->toArray());
        return new DescribeTapesResponse($result->toArray());
    }
}
