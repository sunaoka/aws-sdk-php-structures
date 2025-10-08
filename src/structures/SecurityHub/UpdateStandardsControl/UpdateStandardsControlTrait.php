<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateStandardsControl;

trait UpdateStandardsControlTrait
{
    /**
     * @param UpdateStandardsControlRequest $args
     * @return UpdateStandardsControlResponse
     */
    public function updateStandardsControl(UpdateStandardsControlRequest $args)
    {
        $result = parent::updateStandardsControl($args->toArray());
        return new UpdateStandardsControlResponse($result->toArray());
    }
}
