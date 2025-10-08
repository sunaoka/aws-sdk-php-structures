<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetListElements;

trait GetListElementsTrait
{
    /**
     * @param GetListElementsRequest $args
     * @return GetListElementsResponse
     */
    public function getListElements(GetListElementsRequest $args)
    {
        $result = parent::getListElements($args->toArray());
        return new GetListElementsResponse($result->toArray());
    }
}
