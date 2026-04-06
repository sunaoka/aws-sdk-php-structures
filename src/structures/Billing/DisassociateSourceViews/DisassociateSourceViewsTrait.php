<?php

namespace Sunaoka\Aws\Structures\Billing\DisassociateSourceViews;

trait DisassociateSourceViewsTrait
{
    /**
     * @param DisassociateSourceViewsRequest $args
     * @return DisassociateSourceViewsResponse
     */
    public function disassociateSourceViews(DisassociateSourceViewsRequest $args)
    {
        $result = parent::disassociateSourceViews($args->toArray());
        return new DisassociateSourceViewsResponse($result->toArray());
    }
}
