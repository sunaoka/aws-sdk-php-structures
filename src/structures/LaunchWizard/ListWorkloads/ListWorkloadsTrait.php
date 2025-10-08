<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListWorkloads;

trait ListWorkloadsTrait
{
    /**
     * @param ListWorkloadsRequest $args
     * @return ListWorkloadsResponse
     */
    public function listWorkloads(ListWorkloadsRequest $args)
    {
        $result = parent::listWorkloads($args->toArray());
        return new ListWorkloadsResponse($result->toArray());
    }
}
