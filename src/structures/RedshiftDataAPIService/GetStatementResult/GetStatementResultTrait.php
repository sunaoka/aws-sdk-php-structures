<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResult;

trait GetStatementResultTrait
{
    /**
     * @param GetStatementResultRequest $args
     * @return GetStatementResultResponse
     */
    public function getStatementResult(GetStatementResultRequest $args)
    {
        $result = parent::getStatementResult($args->toArray());
        return new GetStatementResultResponse($result->toArray());
    }
}
