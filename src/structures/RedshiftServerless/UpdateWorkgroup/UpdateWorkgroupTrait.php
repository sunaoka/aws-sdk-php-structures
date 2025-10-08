<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateWorkgroup;

trait UpdateWorkgroupTrait
{
    /**
     * @param UpdateWorkgroupRequest $args
     * @return UpdateWorkgroupResponse
     */
    public function updateWorkgroup(UpdateWorkgroupRequest $args)
    {
        $result = parent::updateWorkgroup($args->toArray());
        return new UpdateWorkgroupResponse($result->toArray());
    }
}
