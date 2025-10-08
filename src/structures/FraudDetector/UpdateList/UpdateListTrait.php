<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateList;

trait UpdateListTrait
{
    /**
     * @param UpdateListRequest $args
     * @return UpdateListResponse
     */
    public function updateList(UpdateListRequest $args)
    {
        $result = parent::updateList($args->toArray());
        return new UpdateListResponse($result->toArray());
    }
}
