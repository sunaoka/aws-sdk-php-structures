<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\AssociateNode;

trait AssociateNodeTrait
{
    /**
     * @param AssociateNodeRequest $args
     * @return AssociateNodeResponse
     */
    public function associateNode(AssociateNodeRequest $args)
    {
        $result = parent::associateNode($args->toArray());
        return new AssociateNodeResponse($result->toArray());
    }
}
