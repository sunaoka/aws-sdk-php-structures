<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonRevisions;

trait DescribeDaemonRevisionsTrait
{
    /**
     * @param DescribeDaemonRevisionsRequest $args
     * @return DescribeDaemonRevisionsResponse
     */
    public function describeDaemonRevisions(DescribeDaemonRevisionsRequest $args)
    {
        $result = parent::describeDaemonRevisions($args->toArray());
        return new DescribeDaemonRevisionsResponse($result->toArray());
    }
}
