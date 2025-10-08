<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelCard;

trait DescribeModelCardTrait
{
    /**
     * @param DescribeModelCardRequest $args
     * @return DescribeModelCardResponse
     */
    public function describeModelCard(DescribeModelCardRequest $args)
    {
        $result = parent::describeModelCard($args->toArray());
        return new DescribeModelCardResponse($result->toArray());
    }
}
