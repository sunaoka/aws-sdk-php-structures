<?php

namespace Sunaoka\Aws\Structures\Translate\DescribeTextTranslationJob;

trait DescribeTextTranslationJobTrait
{
    /**
     * @param DescribeTextTranslationJobRequest $args
     * @return DescribeTextTranslationJobResponse
     */
    public function describeTextTranslationJob(DescribeTextTranslationJobRequest $args)
    {
        $result = parent::describeTextTranslationJob($args->toArray());
        return new DescribeTextTranslationJobResponse($result->toArray());
    }
}
