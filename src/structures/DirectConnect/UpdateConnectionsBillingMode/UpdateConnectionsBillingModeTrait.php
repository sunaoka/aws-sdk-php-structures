<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateConnectionsBillingMode;

trait UpdateConnectionsBillingModeTrait
{
    /**
     * @param UpdateConnectionsBillingModeRequest $args
     * @return UpdateConnectionsBillingModeResponse
     */
    public function updateConnectionsBillingMode(UpdateConnectionsBillingModeRequest $args)
    {
        $result = parent::updateConnectionsBillingMode($args->toArray());
        return new UpdateConnectionsBillingModeResponse($result->toArray());
    }
}
