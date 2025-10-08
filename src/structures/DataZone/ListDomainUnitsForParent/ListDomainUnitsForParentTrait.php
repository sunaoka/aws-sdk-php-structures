<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomainUnitsForParent;

trait ListDomainUnitsForParentTrait
{
    /**
     * @param ListDomainUnitsForParentRequest $args
     * @return ListDomainUnitsForParentResponse
     */
    public function listDomainUnitsForParent(ListDomainUnitsForParentRequest $args)
    {
        $result = parent::listDomainUnitsForParent($args->toArray());
        return new ListDomainUnitsForParentResponse($result->toArray());
    }
}
