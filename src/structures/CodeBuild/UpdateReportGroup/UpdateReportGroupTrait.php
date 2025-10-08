<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateReportGroup;

trait UpdateReportGroupTrait
{
    /**
     * @param UpdateReportGroupRequest $args
     * @return UpdateReportGroupResponse
     */
    public function updateReportGroup(UpdateReportGroupRequest $args)
    {
        $result = parent::updateReportGroup($args->toArray());
        return new UpdateReportGroupResponse($result->toArray());
    }
}
