<?php

namespace Sunaoka\Aws\Structures\Outposts\ListQuotes;

trait ListQuotesTrait
{
    /**
     * @param ListQuotesRequest $args
     * @return ListQuotesResponse
     */
    public function listQuotes(ListQuotesRequest $args)
    {
        $result = parent::listQuotes($args->toArray());
        return new ListQuotesResponse($result->toArray());
    }
}
