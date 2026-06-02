<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeJobSchemaVersion;

trait DescribeJobSchemaVersionTrait
{
    /**
     * @param DescribeJobSchemaVersionRequest $args
     * @return DescribeJobSchemaVersionResponse
     */
    public function describeJobSchemaVersion(DescribeJobSchemaVersionRequest $args)
    {
        $result = parent::describeJobSchemaVersion($args->toArray());
        return new DescribeJobSchemaVersionResponse($result->toArray());
    }
}
