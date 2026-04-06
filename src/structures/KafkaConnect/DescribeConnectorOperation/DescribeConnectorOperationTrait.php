<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnectorOperation;

trait DescribeConnectorOperationTrait
{
    /**
     * @param DescribeConnectorOperationRequest $args
     * @return DescribeConnectorOperationResponse
     */
    public function describeConnectorOperation(DescribeConnectorOperationRequest $args)
    {
        $result = parent::describeConnectorOperation($args->toArray());
        return new DescribeConnectorOperationResponse($result->toArray());
    }
}
