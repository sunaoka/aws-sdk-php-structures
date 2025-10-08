<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecommender;

trait DescribeRecommenderTrait
{
    /**
     * @param DescribeRecommenderRequest $args
     * @return DescribeRecommenderResponse
     */
    public function describeRecommender(DescribeRecommenderRequest $args)
    {
        $result = parent::describeRecommender($args->toArray());
        return new DescribeRecommenderResponse($result->toArray());
    }
}
