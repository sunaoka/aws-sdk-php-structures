<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateContext;

trait UpdateContextTrait
{
    /**
     * @param UpdateContextRequest $args
     * @return UpdateContextResponse
     */
    public function updateContext(UpdateContextRequest $args)
    {
        $result = parent::updateContext($args->toArray());
        return new UpdateContextResponse($result->toArray());
    }
}
