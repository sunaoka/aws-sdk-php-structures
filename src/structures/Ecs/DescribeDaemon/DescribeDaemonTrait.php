<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemon;

trait DescribeDaemonTrait
{
    /**
     * @param DescribeDaemonRequest $args
     * @return DescribeDaemonResponse
     */
    public function describeDaemon(DescribeDaemonRequest $args)
    {
        $result = parent::describeDaemon($args->toArray());
        return new DescribeDaemonResponse($result->toArray());
    }
}
