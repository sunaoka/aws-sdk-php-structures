<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImageVersion;

trait GetMicrovmImageVersionTrait
{
    /**
     * @param GetMicrovmImageVersionRequest $args
     * @return GetMicrovmImageVersionResponse
     */
    public function getMicrovmImageVersion(GetMicrovmImageVersionRequest $args)
    {
        $result = parent::getMicrovmImageVersion($args->toArray());
        return new GetMicrovmImageVersionResponse($result->toArray());
    }
}
