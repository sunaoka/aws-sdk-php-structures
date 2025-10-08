<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\AssociateDefaultView;

trait AssociateDefaultViewTrait
{
    /**
     * @param AssociateDefaultViewRequest $args
     * @return AssociateDefaultViewResponse
     */
    public function associateDefaultView(AssociateDefaultViewRequest $args)
    {
        $result = parent::associateDefaultView($args->toArray());
        return new AssociateDefaultViewResponse($result->toArray());
    }
}
