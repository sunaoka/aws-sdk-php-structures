<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetRetriever;

trait GetRetrieverTrait
{
    /**
     * @param GetRetrieverRequest $args
     * @return GetRetrieverResponse
     */
    public function getRetriever(GetRetrieverRequest $args)
    {
        $result = parent::getRetriever($args->toArray());
        return new GetRetrieverResponse($result->toArray());
    }
}
