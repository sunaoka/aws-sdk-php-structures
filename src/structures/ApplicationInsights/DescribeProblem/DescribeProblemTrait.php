<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeProblem;

trait DescribeProblemTrait
{
    /**
     * @param DescribeProblemRequest $args
     * @return DescribeProblemResponse
     */
    public function describeProblem(DescribeProblemRequest $args)
    {
        $result = parent::describeProblem($args->toArray());
        return new DescribeProblemResponse($result->toArray());
    }
}
