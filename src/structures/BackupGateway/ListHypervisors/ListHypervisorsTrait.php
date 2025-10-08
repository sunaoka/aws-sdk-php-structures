<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListHypervisors;

trait ListHypervisorsTrait
{
    /**
     * @param ListHypervisorsRequest $args
     * @return ListHypervisorsResponse
     */
    public function listHypervisors(ListHypervisorsRequest $args)
    {
        $result = parent::listHypervisors($args->toArray());
        return new ListHypervisorsResponse($result->toArray());
    }
}
