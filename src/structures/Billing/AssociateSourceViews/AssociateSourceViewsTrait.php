<?php

namespace Sunaoka\Aws\Structures\Billing\AssociateSourceViews;

trait AssociateSourceViewsTrait
{
    /**
     * @param AssociateSourceViewsRequest $args
     * @return AssociateSourceViewsResponse
     */
    public function associateSourceViews(AssociateSourceViewsRequest $args)
    {
        $result = parent::associateSourceViews($args->toArray());
        return new AssociateSourceViewsResponse($result->toArray());
    }
}
