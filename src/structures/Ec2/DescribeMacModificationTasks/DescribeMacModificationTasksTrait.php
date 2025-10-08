<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMacModificationTasks;

trait DescribeMacModificationTasksTrait
{
    /**
     * @param DescribeMacModificationTasksRequest $args
     * @return DescribeMacModificationTasksResponse
     */
    public function describeMacModificationTasks(DescribeMacModificationTasksRequest $args)
    {
        $result = parent::describeMacModificationTasks($args->toArray());
        return new DescribeMacModificationTasksResponse($result->toArray());
    }
}
