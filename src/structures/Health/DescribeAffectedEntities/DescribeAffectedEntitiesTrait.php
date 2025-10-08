<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntities;

trait DescribeAffectedEntitiesTrait
{
    /**
     * @param DescribeAffectedEntitiesRequest $args
     * @return DescribeAffectedEntitiesResponse
     */
    public function describeAffectedEntities(DescribeAffectedEntitiesRequest $args)
    {
        $result = parent::describeAffectedEntities($args->toArray());
        return new DescribeAffectedEntitiesResponse($result->toArray());
    }
}
