<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteReportGroup;

trait DeleteReportGroupTrait
{
    /**
     * @param DeleteReportGroupRequest $args
     * @return DeleteReportGroupResponse
     */
    public function deleteReportGroup(DeleteReportGroupRequest $args)
    {
        $result = parent::deleteReportGroup($args->toArray());
        return new DeleteReportGroupResponse($result->toArray());
    }
}
