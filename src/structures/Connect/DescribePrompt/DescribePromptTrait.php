<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePrompt;

trait DescribePromptTrait
{
    /**
     * @param DescribePromptRequest $args
     * @return DescribePromptResponse
     */
    public function describePrompt(DescribePromptRequest $args)
    {
        $result = parent::describePrompt($args->toArray());
        return new DescribePromptResponse($result->toArray());
    }
}
