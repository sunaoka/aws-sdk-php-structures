<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateWorkgroup;

trait CreateWorkgroupTrait
{
    /**
     * @param CreateWorkgroupRequest $args
     * @return CreateWorkgroupResponse
     */
    public function createWorkgroup(CreateWorkgroupRequest $args)
    {
        $result = parent::createWorkgroup($args->toArray());
        return new CreateWorkgroupResponse($result->toArray());
    }
}
