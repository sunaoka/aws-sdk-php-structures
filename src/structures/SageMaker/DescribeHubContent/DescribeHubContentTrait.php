<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHubContent;

trait DescribeHubContentTrait
{
    /**
     * @param DescribeHubContentRequest $args
     * @return DescribeHubContentResponse
     */
    public function describeHubContent(DescribeHubContentRequest $args)
    {
        $result = parent::describeHubContent($args->toArray());
        return new DescribeHubContentResponse($result->toArray());
    }
}
