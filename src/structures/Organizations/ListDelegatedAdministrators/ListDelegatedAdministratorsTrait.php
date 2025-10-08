<?php

namespace Sunaoka\Aws\Structures\Organizations\ListDelegatedAdministrators;

trait ListDelegatedAdministratorsTrait
{
    /**
     * @param ListDelegatedAdministratorsRequest $args
     * @return ListDelegatedAdministratorsResponse
     */
    public function listDelegatedAdministrators(ListDelegatedAdministratorsRequest $args)
    {
        $result = parent::listDelegatedAdministrators($args->toArray());
        return new ListDelegatedAdministratorsResponse($result->toArray());
    }
}
