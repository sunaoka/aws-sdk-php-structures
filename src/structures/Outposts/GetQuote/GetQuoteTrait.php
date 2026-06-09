<?php

namespace Sunaoka\Aws\Structures\Outposts\GetQuote;

trait GetQuoteTrait
{
    /**
     * @param GetQuoteRequest $args
     * @return GetQuoteResponse
     */
    public function getQuote(GetQuoteRequest $args)
    {
        $result = parent::getQuote($args->toArray());
        return new GetQuoteResponse($result->toArray());
    }
}
