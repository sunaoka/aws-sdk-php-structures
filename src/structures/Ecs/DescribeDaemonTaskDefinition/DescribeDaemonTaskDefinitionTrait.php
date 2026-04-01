<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonTaskDefinition;

trait DescribeDaemonTaskDefinitionTrait
{
    /**
     * @param DescribeDaemonTaskDefinitionRequest $args
     * @return DescribeDaemonTaskDefinitionResponse
     */
    public function describeDaemonTaskDefinition(DescribeDaemonTaskDefinitionRequest $args)
    {
        $result = parent::describeDaemonTaskDefinition($args->toArray());
        return new DescribeDaemonTaskDefinitionResponse($result->toArray());
    }
}
