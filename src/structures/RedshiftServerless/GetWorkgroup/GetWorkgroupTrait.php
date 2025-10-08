<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetWorkgroup;

trait GetWorkgroupTrait
{
    /**
     * @param GetWorkgroupRequest $args
     * @return GetWorkgroupResponse
     */
    public function getWorkgroup(GetWorkgroupRequest $args)
    {
        $result = parent::getWorkgroup($args->toArray());
        return new GetWorkgroupResponse($result->toArray());
    }
}
