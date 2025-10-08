<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstanceResourceDrifts;

trait ListStackInstanceResourceDriftsTrait
{
    /**
     * @param ListStackInstanceResourceDriftsRequest $args
     * @return ListStackInstanceResourceDriftsResponse
     */
    public function listStackInstanceResourceDrifts(ListStackInstanceResourceDriftsRequest $args)
    {
        $result = parent::listStackInstanceResourceDrifts($args->toArray());
        return new ListStackInstanceResourceDriftsResponse($result->toArray());
    }
}
