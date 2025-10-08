<?php

namespace Sunaoka\Aws\Structures\Cloud9\CreateEnvironmentEC2;

trait CreateEnvironmentEC2Trait
{
    /**
     * @param CreateEnvironmentEC2Request $args
     * @return CreateEnvironmentEC2Response
     */
    public function createEnvironmentEC2(CreateEnvironmentEC2Request $args)
    {
        $result = parent::createEnvironmentEC2($args->toArray());
        return new CreateEnvironmentEC2Response($result->toArray());
    }
}
