<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingPrincipals;

trait ListThingPrincipalsTrait
{
    /**
     * @param ListThingPrincipalsRequest $args
     * @return ListThingPrincipalsResponse
     */
    public function listThingPrincipals(ListThingPrincipalsRequest $args)
    {
        $result = parent::listThingPrincipals($args->toArray());
        return new ListThingPrincipalsResponse($result->toArray());
    }
}
