<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DescribeLanguageModel;

trait DescribeLanguageModelTrait
{
    /**
     * @param DescribeLanguageModelRequest $args
     * @return DescribeLanguageModelResponse
     */
    public function describeLanguageModel(DescribeLanguageModelRequest $args)
    {
        $result = parent::describeLanguageModel($args->toArray());
        return new DescribeLanguageModelResponse($result->toArray());
    }
}
