<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateQuote;

trait UpdateQuoteTrait
{
    /**
     * @param UpdateQuoteRequest $args
     * @return UpdateQuoteResponse
     */
    public function updateQuote(UpdateQuoteRequest $args)
    {
        $result = parent::updateQuote($args->toArray());
        return new UpdateQuoteResponse($result->toArray());
    }
}
