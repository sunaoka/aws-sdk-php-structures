<?php

namespace Sunaoka\Aws\Structures\Ssm\LabelParameterVersion;

trait LabelParameterVersionTrait
{
    /**
     * @param LabelParameterVersionRequest $args
     * @return LabelParameterVersionResponse
     */
    public function labelParameterVersion(LabelParameterVersionRequest $args)
    {
        $result = parent::labelParameterVersion($args->toArray());
        return new LabelParameterVersionResponse($result->toArray());
    }
}
