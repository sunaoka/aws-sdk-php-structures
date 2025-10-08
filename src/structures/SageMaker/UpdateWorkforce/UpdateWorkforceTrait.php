<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkforce;

trait UpdateWorkforceTrait
{
    /**
     * @param UpdateWorkforceRequest $args
     * @return UpdateWorkforceResponse
     */
    public function updateWorkforce(UpdateWorkforceRequest $args)
    {
        $result = parent::updateWorkforce($args->toArray());
        return new UpdateWorkforceResponse($result->toArray());
    }
}
