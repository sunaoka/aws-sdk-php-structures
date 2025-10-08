<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeArtifact;

trait DescribeArtifactTrait
{
    /**
     * @param DescribeArtifactRequest $args
     * @return DescribeArtifactResponse
     */
    public function describeArtifact(DescribeArtifactRequest $args)
    {
        $result = parent::describeArtifact($args->toArray());
        return new DescribeArtifactResponse($result->toArray());
    }
}
