<?php

namespace Sunaoka\Aws\Structures\Wickr\GetOpentdfConfig;

trait GetOpentdfConfigTrait
{
    /**
     * @param GetOpentdfConfigRequest $args
     * @return GetOpentdfConfigResponse
     */
    public function getOpentdfConfig(GetOpentdfConfigRequest $args)
    {
        $result = parent::getOpentdfConfig($args->toArray());
        return new GetOpentdfConfigResponse($result->toArray());
    }
}
