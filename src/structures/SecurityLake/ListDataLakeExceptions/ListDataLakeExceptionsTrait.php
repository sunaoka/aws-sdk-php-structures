<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListDataLakeExceptions;

trait ListDataLakeExceptionsTrait
{
    /**
     * @param ListDataLakeExceptionsRequest $args
     * @return ListDataLakeExceptionsResponse
     */
    public function listDataLakeExceptions(ListDataLakeExceptionsRequest $args)
    {
        $result = parent::listDataLakeExceptions($args->toArray());
        return new ListDataLakeExceptionsResponse($result->toArray());
    }
}
