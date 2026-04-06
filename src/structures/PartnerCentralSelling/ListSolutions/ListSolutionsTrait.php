<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListSolutions;

trait ListSolutionsTrait
{
    /**
     * @param ListSolutionsRequest $args
     * @return ListSolutionsResponse
     */
    public function listSolutions(ListSolutionsRequest $args)
    {
        $result = parent::listSolutions($args->toArray());
        return new ListSolutionsResponse($result->toArray());
    }
}
