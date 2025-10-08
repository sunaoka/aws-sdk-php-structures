<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParametersByPath;

trait GetParametersByPathTrait
{
    /**
     * @param GetParametersByPathRequest $args
     * @return GetParametersByPathResponse
     */
    public function getParametersByPath(GetParametersByPathRequest $args)
    {
        $result = parent::getParametersByPath($args->toArray());
        return new GetParametersByPathResponse($result->toArray());
    }
}
