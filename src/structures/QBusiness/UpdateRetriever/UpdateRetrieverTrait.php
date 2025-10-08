<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateRetriever;

trait UpdateRetrieverTrait
{
    /**
     * @param UpdateRetrieverRequest $args
     * @return UpdateRetrieverResponse
     */
    public function updateRetriever(UpdateRetrieverRequest $args)
    {
        $result = parent::updateRetriever($args->toArray());
        return new UpdateRetrieverResponse($result->toArray());
    }
}
