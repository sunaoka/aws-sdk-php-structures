<?php

namespace Sunaoka\Aws\Structures\Continuum\AssociateCollector;

trait AssociateCollectorTrait
{
    /**
     * @param AssociateCollectorRequest $args
     * @return AssociateCollectorResponse
     */
    public function associateCollector(AssociateCollectorRequest $args)
    {
        $result = parent::associateCollector($args->toArray());
        return new AssociateCollectorResponse($result->toArray());
    }
}
