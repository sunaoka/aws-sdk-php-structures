<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DisassociateFeed;

trait DisassociateFeedTrait
{
    /**
     * @param DisassociateFeedRequest $args
     * @return DisassociateFeedResponse
     */
    public function disassociateFeed(DisassociateFeedRequest $args)
    {
        $result = parent::disassociateFeed($args->toArray());
        return new DisassociateFeedResponse($result->toArray());
    }
}
