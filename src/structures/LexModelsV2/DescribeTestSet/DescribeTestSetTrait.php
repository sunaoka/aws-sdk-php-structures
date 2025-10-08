<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSet;

trait DescribeTestSetTrait
{
    /**
     * @param DescribeTestSetRequest $args
     * @return DescribeTestSetResponse
     */
    public function describeTestSet(DescribeTestSetRequest $args)
    {
        $result = parent::describeTestSet($args->toArray());
        return new DescribeTestSetResponse($result->toArray());
    }
}
