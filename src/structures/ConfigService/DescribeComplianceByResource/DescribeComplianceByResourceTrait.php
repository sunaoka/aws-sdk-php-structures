<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByResource;

trait DescribeComplianceByResourceTrait
{
    /**
     * @param DescribeComplianceByResourceRequest $args
     * @return DescribeComplianceByResourceResponse
     */
    public function describeComplianceByResource(DescribeComplianceByResourceRequest $args)
    {
        $result = parent::describeComplianceByResource($args->toArray());
        return new DescribeComplianceByResourceResponse($result->toArray());
    }
}
