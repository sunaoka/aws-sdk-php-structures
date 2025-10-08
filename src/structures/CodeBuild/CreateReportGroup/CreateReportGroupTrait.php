<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateReportGroup;

trait CreateReportGroupTrait
{
    /**
     * @param CreateReportGroupRequest $args
     * @return CreateReportGroupResponse
     */
    public function createReportGroup(CreateReportGroupRequest $args)
    {
        $result = parent::createReportGroup($args->toArray());
        return new CreateReportGroupResponse($result->toArray());
    }
}
