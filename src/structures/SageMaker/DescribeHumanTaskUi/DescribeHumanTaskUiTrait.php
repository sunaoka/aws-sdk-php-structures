<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHumanTaskUi;

trait DescribeHumanTaskUiTrait
{
    /**
     * @param DescribeHumanTaskUiRequest $args
     * @return DescribeHumanTaskUiResponse
     */
    public function describeHumanTaskUi(DescribeHumanTaskUiRequest $args)
    {
        $result = parent::describeHumanTaskUi($args->toArray());
        return new DescribeHumanTaskUiResponse($result->toArray());
    }
}
