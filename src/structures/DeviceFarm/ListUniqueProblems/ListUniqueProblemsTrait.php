<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListUniqueProblems;

trait ListUniqueProblemsTrait
{
    /**
     * @param ListUniqueProblemsRequest $args
     * @return ListUniqueProblemsResponse
     */
    public function listUniqueProblems(ListUniqueProblemsRequest $args)
    {
        $result = parent::listUniqueProblems($args->toArray());
        return new ListUniqueProblemsResponse($result->toArray());
    }
}
