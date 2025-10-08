<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ConfigureAgent;

trait ConfigureAgentTrait
{
    /**
     * @param ConfigureAgentRequest $args
     * @return ConfigureAgentResponse
     */
    public function configureAgent(ConfigureAgentRequest $args)
    {
        $result = parent::configureAgent($args->toArray());
        return new ConfigureAgentResponse($result->toArray());
    }
}
