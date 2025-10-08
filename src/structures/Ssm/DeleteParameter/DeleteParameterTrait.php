<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteParameter;

trait DeleteParameterTrait
{
    /**
     * @param DeleteParameterRequest $args
     * @return DeleteParameterResponse
     */
    public function deleteParameter(DeleteParameterRequest $args)
    {
        $result = parent::deleteParameter($args->toArray());
        return new DeleteParameterResponse($result->toArray());
    }
}
