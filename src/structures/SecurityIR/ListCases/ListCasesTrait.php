<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListCases;

trait ListCasesTrait
{
    /**
     * @param ListCasesRequest $args
     * @return ListCasesResponse
     */
    public function listCases(ListCasesRequest $args)
    {
        $result = parent::listCases($args->toArray());
        return new ListCasesResponse($result->toArray());
    }
}
