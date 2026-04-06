<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListStreamingAccessForServices;

trait ListStreamingAccessForServicesTrait
{
    /**
     * @param ListStreamingAccessForServicesRequest $args
     * @return ListStreamingAccessForServicesResponse
     */
    public function listStreamingAccessForServices(ListStreamingAccessForServicesRequest $args)
    {
        $result = parent::listStreamingAccessForServices($args->toArray());
        return new ListStreamingAccessForServicesResponse($result->toArray());
    }
}
