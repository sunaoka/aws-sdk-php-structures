<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution;

trait DescribeSolutionTrait
{
    /**
     * @param DescribeSolutionRequest $args
     * @return DescribeSolutionResponse
     */
    public function describeSolution(DescribeSolutionRequest $args)
    {
        $result = parent::describeSolution($args->toArray());
        return new DescribeSolutionResponse($result->toArray());
    }
}
