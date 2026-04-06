<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignmentsForPrincipal;

trait ListApplicationAssignmentsForPrincipalTrait
{
    /**
     * @param ListApplicationAssignmentsForPrincipalRequest $args
     * @return ListApplicationAssignmentsForPrincipalResponse
     */
    public function listApplicationAssignmentsForPrincipal(ListApplicationAssignmentsForPrincipalRequest $args)
    {
        $result = parent::listApplicationAssignmentsForPrincipal($args->toArray());
        return new ListApplicationAssignmentsForPrincipalResponse($result->toArray());
    }
}
