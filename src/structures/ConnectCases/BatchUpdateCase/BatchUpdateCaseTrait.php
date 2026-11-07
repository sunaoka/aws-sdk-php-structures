<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchUpdateCase;

trait BatchUpdateCaseTrait
{
    /**
     * @param BatchUpdateCaseRequest $args
     * @return BatchUpdateCaseResponse
     */
    public function batchUpdateCase(BatchUpdateCaseRequest $args)
    {
        $result = parent::batchUpdateCase($args->toArray());
        return new BatchUpdateCaseResponse($result->toArray());
    }
}
