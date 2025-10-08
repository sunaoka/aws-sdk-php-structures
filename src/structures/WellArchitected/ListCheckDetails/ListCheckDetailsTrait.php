<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListCheckDetails;

trait ListCheckDetailsTrait
{
    /**
     * @param ListCheckDetailsRequest $args
     * @return ListCheckDetailsResponse
     */
    public function listCheckDetails(ListCheckDetailsRequest $args)
    {
        $result = parent::listCheckDetails($args->toArray());
        return new ListCheckDetailsResponse($result->toArray());
    }
}
