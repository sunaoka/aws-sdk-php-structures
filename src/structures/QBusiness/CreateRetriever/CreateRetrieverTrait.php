<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateRetriever;

trait CreateRetrieverTrait
{
    /**
     * @param CreateRetrieverRequest $args
     * @return CreateRetrieverResponse
     */
    public function createRetriever(CreateRetrieverRequest $args)
    {
        $result = parent::createRetriever($args->toArray());
        return new CreateRetrieverResponse($result->toArray());
    }
}
