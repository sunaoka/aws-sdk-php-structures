<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetIndex;

trait GetIndexTrait
{
    /**
     * @param GetIndexRequest $args
     * @return GetIndexResponse
     */
    public function getIndex(GetIndexRequest $args)
    {
        $result = parent::getIndex($args->toArray());
        return new GetIndexResponse($result->toArray());
    }
}
