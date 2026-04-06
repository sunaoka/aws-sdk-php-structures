<?php

namespace Sunaoka\Aws\Structures\Wickr\RegisterOpentdfConfig;

trait RegisterOpentdfConfigTrait
{
    /**
     * @param RegisterOpentdfConfigRequest $args
     * @return RegisterOpentdfConfigResponse
     */
    public function registerOpentdfConfig(RegisterOpentdfConfigRequest $args)
    {
        $result = parent::registerOpentdfConfig($args->toArray());
        return new RegisterOpentdfConfigResponse($result->toArray());
    }
}
