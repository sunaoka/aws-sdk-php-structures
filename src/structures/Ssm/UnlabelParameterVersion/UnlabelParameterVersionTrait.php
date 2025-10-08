<?php

namespace Sunaoka\Aws\Structures\Ssm\UnlabelParameterVersion;

trait UnlabelParameterVersionTrait
{
    /**
     * @param UnlabelParameterVersionRequest $args
     * @return UnlabelParameterVersionResponse
     */
    public function unlabelParameterVersion(UnlabelParameterVersionRequest $args)
    {
        $result = parent::unlabelParameterVersion($args->toArray());
        return new UnlabelParameterVersionResponse($result->toArray());
    }
}
