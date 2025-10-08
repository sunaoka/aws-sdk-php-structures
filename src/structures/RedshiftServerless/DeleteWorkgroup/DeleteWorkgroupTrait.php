<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteWorkgroup;

trait DeleteWorkgroupTrait
{
    /**
     * @param DeleteWorkgroupRequest $args
     * @return DeleteWorkgroupResponse
     */
    public function deleteWorkgroup(DeleteWorkgroupRequest $args)
    {
        $result = parent::deleteWorkgroup($args->toArray());
        return new DeleteWorkgroupResponse($result->toArray());
    }
}
