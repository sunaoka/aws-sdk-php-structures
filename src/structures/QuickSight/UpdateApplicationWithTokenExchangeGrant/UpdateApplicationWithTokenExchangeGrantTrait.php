<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateApplicationWithTokenExchangeGrant;

trait UpdateApplicationWithTokenExchangeGrantTrait
{
    /**
     * @param UpdateApplicationWithTokenExchangeGrantRequest $args
     * @return UpdateApplicationWithTokenExchangeGrantResponse
     */
    public function updateApplicationWithTokenExchangeGrant(UpdateApplicationWithTokenExchangeGrantRequest $args)
    {
        $result = parent::updateApplicationWithTokenExchangeGrant($args->toArray());
        return new UpdateApplicationWithTokenExchangeGrantResponse($result->toArray());
    }
}
