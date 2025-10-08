<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLenses;

trait ListLensesTrait
{
    /**
     * @param ListLensesRequest $args
     * @return ListLensesResponse
     */
    public function listLenses(ListLensesRequest $args)
    {
        $result = parent::listLenses($args->toArray());
        return new ListLensesResponse($result->toArray());
    }
}
