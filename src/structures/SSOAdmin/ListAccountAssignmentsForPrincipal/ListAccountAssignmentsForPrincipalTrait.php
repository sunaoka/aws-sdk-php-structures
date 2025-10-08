<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentsForPrincipal;

trait ListAccountAssignmentsForPrincipalTrait
{
    /**
     * @param ListAccountAssignmentsForPrincipalRequest $args
     * @return ListAccountAssignmentsForPrincipalResponse
     */
    public function listAccountAssignmentsForPrincipal(ListAccountAssignmentsForPrincipalRequest $args)
    {
        $result = parent::listAccountAssignmentsForPrincipal($args->toArray());
        return new ListAccountAssignmentsForPrincipalResponse($result->toArray());
    }
}
