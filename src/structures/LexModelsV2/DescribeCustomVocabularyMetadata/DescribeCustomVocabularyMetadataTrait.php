<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeCustomVocabularyMetadata;

trait DescribeCustomVocabularyMetadataTrait
{
    /**
     * @param DescribeCustomVocabularyMetadataRequest $args
     * @return DescribeCustomVocabularyMetadataResponse
     */
    public function describeCustomVocabularyMetadata(DescribeCustomVocabularyMetadataRequest $args)
    {
        $result = parent::describeCustomVocabularyMetadata($args->toArray());
        return new DescribeCustomVocabularyMetadataResponse($result->toArray());
    }
}
