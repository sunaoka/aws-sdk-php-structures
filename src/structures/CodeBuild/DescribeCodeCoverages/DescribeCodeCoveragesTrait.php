<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeCodeCoverages;

trait DescribeCodeCoveragesTrait
{
    /**
     * @param DescribeCodeCoveragesRequest $args
     * @return DescribeCodeCoveragesResponse
     */
    public function describeCodeCoverages(DescribeCodeCoveragesRequest $args)
    {
        $result = parent::describeCodeCoverages($args->toArray());
        return new DescribeCodeCoveragesResponse($result->toArray());
    }
}
