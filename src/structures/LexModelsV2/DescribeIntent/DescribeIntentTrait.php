<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent;

trait DescribeIntentTrait
{
    /**
     * @param DescribeIntentRequest $args
     * @return DescribeIntentResponse
     */
    public function describeIntent(DescribeIntentRequest $args)
    {
        $result = parent::describeIntent($args->toArray());
        return new DescribeIntentResponse($result->toArray());
    }
}
