<?php

namespace Sunaoka\Aws\Structures\TranscribeService;

class TranscribeServiceClient extends \Aws\TranscribeService\TranscribeServiceClient
{
    use CreateCallAnalyticsCategory\CreateCallAnalyticsCategoryTrait;
    use CreateLanguageModel\CreateLanguageModelTrait;
    use CreateMedicalVocabulary\CreateMedicalVocabularyTrait;
    use CreateVocabulary\CreateVocabularyTrait;
    use CreateVocabularyFilter\CreateVocabularyFilterTrait;
    use DeleteCallAnalyticsCategory\DeleteCallAnalyticsCategoryTrait;
    use DeleteCallAnalyticsJob\DeleteCallAnalyticsJobTrait;
    use DeleteLanguageModel\DeleteLanguageModelTrait;
    use DeleteMedicalScribeJob\DeleteMedicalScribeJobTrait;
    use DeleteMedicalTranscriptionJob\DeleteMedicalTranscriptionJobTrait;
    use DeleteMedicalVocabulary\DeleteMedicalVocabularyTrait;
    use DeleteTranscriptionJob\DeleteTranscriptionJobTrait;
    use DeleteVocabulary\DeleteVocabularyTrait;
    use DeleteVocabularyFilter\DeleteVocabularyFilterTrait;
    use DescribeLanguageModel\DescribeLanguageModelTrait;
    use GetCallAnalyticsCategory\GetCallAnalyticsCategoryTrait;
    use GetCallAnalyticsJob\GetCallAnalyticsJobTrait;
    use GetMedicalScribeJob\GetMedicalScribeJobTrait;
    use GetMedicalTranscriptionJob\GetMedicalTranscriptionJobTrait;
    use GetMedicalVocabulary\GetMedicalVocabularyTrait;
    use GetTranscriptionJob\GetTranscriptionJobTrait;
    use GetVocabulary\GetVocabularyTrait;
    use GetVocabularyFilter\GetVocabularyFilterTrait;
    use ListCallAnalyticsCategories\ListCallAnalyticsCategoriesTrait;
    use ListCallAnalyticsJobs\ListCallAnalyticsJobsTrait;
    use ListLanguageModels\ListLanguageModelsTrait;
    use ListMedicalScribeJobs\ListMedicalScribeJobsTrait;
    use ListMedicalTranscriptionJobs\ListMedicalTranscriptionJobsTrait;
    use ListMedicalVocabularies\ListMedicalVocabulariesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTranscriptionJobs\ListTranscriptionJobsTrait;
    use ListVocabularies\ListVocabulariesTrait;
    use ListVocabularyFilters\ListVocabularyFiltersTrait;
    use StartCallAnalyticsJob\StartCallAnalyticsJobTrait;
    use StartMedicalScribeJob\StartMedicalScribeJobTrait;
    use StartMedicalTranscriptionJob\StartMedicalTranscriptionJobTrait;
    use StartTranscriptionJob\StartTranscriptionJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCallAnalyticsCategory\UpdateCallAnalyticsCategoryTrait;
    use UpdateMedicalVocabulary\UpdateMedicalVocabularyTrait;
    use UpdateVocabulary\UpdateVocabularyTrait;
    use UpdateVocabularyFilter\UpdateVocabularyFilterTrait;
}
