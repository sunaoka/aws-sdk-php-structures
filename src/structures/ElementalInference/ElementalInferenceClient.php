<?php

namespace Sunaoka\Aws\Structures\ElementalInference;

class ElementalInferenceClient extends \Aws\ElementalInference\ElementalInferenceClient
{
    use AssociateFeed\AssociateFeedTrait;
    use CreateFeed\CreateFeedTrait;
    use DeleteFeed\DeleteFeedTrait;
    use DisassociateFeed\DisassociateFeedTrait;
    use GetFeed\GetFeedTrait;
    use ListFeeds\ListFeedsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateFeed\UpdateFeedTrait;
}
