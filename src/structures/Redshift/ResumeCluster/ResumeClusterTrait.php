<?php

namespace Sunaoka\Aws\Structures\Redshift\ResumeCluster;

trait ResumeClusterTrait
{
    /**
     * @param ResumeClusterRequest $args
     * @return ResumeClusterResponse
     */
    public function resumeCluster(ResumeClusterRequest $args)
    {
        $result = parent::resumeCluster($args->toArray());
        return new ResumeClusterResponse($result->toArray());
    }
}
