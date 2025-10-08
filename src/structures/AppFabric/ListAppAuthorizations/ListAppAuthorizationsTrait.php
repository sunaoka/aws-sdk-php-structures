<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListAppAuthorizations;

trait ListAppAuthorizationsTrait
{
    /**
     * @param ListAppAuthorizationsRequest $args
     * @return ListAppAuthorizationsResponse
     */
    public function listAppAuthorizations(ListAppAuthorizationsRequest $args)
    {
        $result = parent::listAppAuthorizations($args->toArray());
        return new ListAppAuthorizationsResponse($result->toArray());
    }
}
