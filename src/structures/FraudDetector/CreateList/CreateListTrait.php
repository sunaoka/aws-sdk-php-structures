<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateList;

trait CreateListTrait
{
    /**
     * @param CreateListRequest $args
     * @return CreateListResponse
     */
    public function createList(CreateListRequest $args)
    {
        $result = parent::createList($args->toArray());
        return new CreateListResponse($result->toArray());
    }
}
