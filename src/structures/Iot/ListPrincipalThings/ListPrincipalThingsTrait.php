<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalThings;

trait ListPrincipalThingsTrait
{
    /**
     * @param ListPrincipalThingsRequest $args
     * @return ListPrincipalThingsResponse
     */
    public function listPrincipalThings(ListPrincipalThingsRequest $args)
    {
        $result = parent::listPrincipalThings($args->toArray());
        return new ListPrincipalThingsResponse($result->toArray());
    }
}
