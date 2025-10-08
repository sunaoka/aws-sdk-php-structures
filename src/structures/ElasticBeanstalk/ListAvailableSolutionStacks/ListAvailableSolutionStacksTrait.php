<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListAvailableSolutionStacks;

trait ListAvailableSolutionStacksTrait
{
    /**
     * @return ListAvailableSolutionStacksResponse
     */
    public function listAvailableSolutionStacks()
    {
        $result = parent::listAvailableSolutionStacks();
        return new ListAvailableSolutionStacksResponse($result->toArray());
    }
}
