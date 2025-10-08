<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteContext;

trait DeleteContextTrait
{
    /**
     * @param DeleteContextRequest $args
     * @return DeleteContextResponse
     */
    public function deleteContext(DeleteContextRequest $args)
    {
        $result = parent::deleteContext($args->toArray());
        return new DeleteContextResponse($result->toArray());
    }
}
