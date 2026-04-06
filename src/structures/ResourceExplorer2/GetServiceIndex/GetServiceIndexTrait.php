<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetServiceIndex;

trait GetServiceIndexTrait
{
    /**
     * @return GetServiceIndexResponse
     */
    public function getServiceIndex()
    {
        $result = parent::getServiceIndex();
        return new GetServiceIndexResponse($result->toArray());
    }
}
