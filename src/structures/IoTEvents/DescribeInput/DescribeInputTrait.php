<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeInput;

trait DescribeInputTrait
{
    /**
     * @param DescribeInputRequest $args
     * @return DescribeInputResponse
     */
    public function describeInput(DescribeInputRequest $args)
    {
        $result = parent::describeInput($args->toArray());
        return new DescribeInputResponse($result->toArray());
    }
}
