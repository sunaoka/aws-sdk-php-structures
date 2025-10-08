<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeVocabulary;

trait DescribeVocabularyTrait
{
    /**
     * @param DescribeVocabularyRequest $args
     * @return DescribeVocabularyResponse
     */
    public function describeVocabulary(DescribeVocabularyRequest $args)
    {
        $result = parent::describeVocabulary($args->toArray());
        return new DescribeVocabularyResponse($result->toArray());
    }
}
