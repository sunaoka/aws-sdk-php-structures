<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImageBuild;

trait GetMicrovmImageBuildTrait
{
    /**
     * @param GetMicrovmImageBuildRequest $args
     * @return GetMicrovmImageBuildResponse
     */
    public function getMicrovmImageBuild(GetMicrovmImageBuildRequest $args)
    {
        $result = parent::getMicrovmImageBuild($args->toArray());
        return new GetMicrovmImageBuildResponse($result->toArray());
    }
}
