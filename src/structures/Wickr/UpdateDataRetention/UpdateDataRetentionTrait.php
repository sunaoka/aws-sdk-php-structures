<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateDataRetention;

trait UpdateDataRetentionTrait
{
    /**
     * @param UpdateDataRetentionRequest $args
     * @return UpdateDataRetentionResponse
     */
    public function updateDataRetention(UpdateDataRetentionRequest $args)
    {
        $result = parent::updateDataRetention($args->toArray());
        return new UpdateDataRetentionResponse($result->toArray());
    }
}
