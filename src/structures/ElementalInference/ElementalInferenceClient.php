<?php

namespace Sunaoka\Aws\Structures\ElementalInference;

class ElementalInferenceClient extends \Aws\ElementalInference\ElementalInferenceClient
{
    use AssociateFeed\AssociateFeedTrait;
    use CreateDictionary\CreateDictionaryTrait;
    use CreateFeed\CreateFeedTrait;
    use DeleteDictionary\DeleteDictionaryTrait;
    use DeleteFeed\DeleteFeedTrait;
    use DeleteFeedPolicy\DeleteFeedPolicyTrait;
    use DisassociateFeed\DisassociateFeedTrait;
    use ExportDictionaryEntries\ExportDictionaryEntriesTrait;
    use GetDictionary\GetDictionaryTrait;
    use GetFeed\GetFeedTrait;
    use GetFeedPolicy\GetFeedPolicyTrait;
    use GetFixture\GetFixtureTrait;
    use ListDictionaries\ListDictionariesTrait;
    use ListFeeds\ListFeedsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutFeedPolicy\PutFeedPolicyTrait;
    use SearchFixtures\SearchFixturesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDictionary\UpdateDictionaryTrait;
    use UpdateFeed\UpdateFeedTrait;
}
