<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteRetriever;

trait DeleteRetrieverTrait
{
    /**
     * @param DeleteRetrieverRequest $args
     * @return DeleteRetrieverResponse
     */
    public function deleteRetriever(DeleteRetrieverRequest $args)
    {
        $result = parent::deleteRetriever($args->toArray());
        return new DeleteRetrieverResponse($result->toArray());
    }
}
