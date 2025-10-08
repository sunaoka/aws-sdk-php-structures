<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListProblems;

trait ListProblemsTrait
{
    /**
     * @param ListProblemsRequest $args
     * @return ListProblemsResponse
     */
    public function listProblems(ListProblemsRequest $args)
    {
        $result = parent::listProblems($args->toArray());
        return new ListProblemsResponse($result->toArray());
    }
}
