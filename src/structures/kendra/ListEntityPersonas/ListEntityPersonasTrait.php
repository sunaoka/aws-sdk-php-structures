<?php

namespace Sunaoka\Aws\Structures\kendra\ListEntityPersonas;

trait ListEntityPersonasTrait
{
    /**
     * @param ListEntityPersonasRequest $args
     * @return ListEntityPersonasResponse
     */
    public function listEntityPersonas(ListEntityPersonasRequest $args)
    {
        $result = parent::listEntityPersonas($args->toArray());
        return new ListEntityPersonasResponse($result->toArray());
    }
}
