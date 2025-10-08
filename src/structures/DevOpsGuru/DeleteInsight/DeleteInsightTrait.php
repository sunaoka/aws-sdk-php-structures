<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DeleteInsight;

trait DeleteInsightTrait
{
    /**
     * @param DeleteInsightRequest $args
     * @return DeleteInsightResponse
     */
    public function deleteInsight(DeleteInsightRequest $args)
    {
        $result = parent::deleteInsight($args->toArray());
        return new DeleteInsightResponse($result->toArray());
    }
}
