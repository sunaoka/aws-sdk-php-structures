<?php

namespace Sunaoka\Aws\Structures\ElementalInference;

class ElementalInferenceClient extends \Aws\ElementalInference\ElementalInferenceClient
{
    use AssociateFeed\AssociateFeedTrait;
    use CreateDictionary\CreateDictionaryTrait;
    use CreateFeed\CreateFeedTrait;
    use CreateFunction\CreateFunctionTrait;
    use CreateQuestionSet\CreateQuestionSetTrait;
    use CreateQuestionSetVersion\CreateQuestionSetVersionTrait;
    use CreateScheduleAction\CreateScheduleActionTrait;
    use DeleteDictionary\DeleteDictionaryTrait;
    use DeleteFeed\DeleteFeedTrait;
    use DeleteFeedPolicy\DeleteFeedPolicyTrait;
    use DeleteFunction\DeleteFunctionTrait;
    use DeleteQuestionSet\DeleteQuestionSetTrait;
    use DeleteQuestionSetVersion\DeleteQuestionSetVersionTrait;
    use DeleteScheduleAction\DeleteScheduleActionTrait;
    use DisassociateFeed\DisassociateFeedTrait;
    use ExportDictionaryEntries\ExportDictionaryEntriesTrait;
    use GetDictionary\GetDictionaryTrait;
    use GetFeed\GetFeedTrait;
    use GetFeedPolicy\GetFeedPolicyTrait;
    use GetFixture\GetFixtureTrait;
    use GetFunction\GetFunctionTrait;
    use GetQuestionSet\GetQuestionSetTrait;
    use ListDictionaries\ListDictionariesTrait;
    use ListFeeds\ListFeedsTrait;
    use ListFunctions\ListFunctionsTrait;
    use ListQuestionSetVersions\ListQuestionSetVersionsTrait;
    use ListQuestionSets\ListQuestionSetsTrait;
    use ListScheduleActions\ListScheduleActionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutFeedPolicy\PutFeedPolicyTrait;
    use SearchFixtures\SearchFixturesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDictionary\UpdateDictionaryTrait;
    use UpdateFeed\UpdateFeedTrait;
    use UpdateFunction\UpdateFunctionTrait;
    use UpdateQuestionSet\UpdateQuestionSetTrait;
}
