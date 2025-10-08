<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeAlertManagerDefinition;

trait DescribeAlertManagerDefinitionTrait
{
    /**
     * @param DescribeAlertManagerDefinitionRequest $args
     * @return DescribeAlertManagerDefinitionResponse
     */
    public function describeAlertManagerDefinition(DescribeAlertManagerDefinitionRequest $args)
    {
        $result = parent::describeAlertManagerDefinition($args->toArray());
        return new DescribeAlertManagerDefinitionResponse($result->toArray());
    }
}
