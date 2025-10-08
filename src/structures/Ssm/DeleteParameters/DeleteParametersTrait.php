<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteParameters;

trait DeleteParametersTrait
{
    /**
     * @param DeleteParametersRequest $args
     * @return DeleteParametersResponse
     */
    public function deleteParameters(DeleteParametersRequest $args)
    {
        $result = parent::deleteParameters($args->toArray());
        return new DeleteParametersResponse($result->toArray());
    }
}
