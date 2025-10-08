<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CancelQuery;

trait CancelQueryTrait
{
    /**
     * @param CancelQueryRequest $args
     * @return CancelQueryResponse
     */
    public function cancelQuery(CancelQueryRequest $args)
    {
        $result = parent::cancelQuery($args->toArray());
        return new CancelQueryResponse($result->toArray());
    }
}
