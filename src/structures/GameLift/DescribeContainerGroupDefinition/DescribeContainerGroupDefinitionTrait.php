<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupDefinition;

trait DescribeContainerGroupDefinitionTrait
{
    /**
     * @param DescribeContainerGroupDefinitionRequest $args
     * @return DescribeContainerGroupDefinitionResponse
     */
    public function describeContainerGroupDefinition(DescribeContainerGroupDefinitionRequest $args)
    {
        $result = parent::describeContainerGroupDefinition($args->toArray());
        return new DescribeContainerGroupDefinitionResponse($result->toArray());
    }
}
