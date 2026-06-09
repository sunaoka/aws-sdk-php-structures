<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateQuote;

trait CreateQuoteTrait
{
    /**
     * @param CreateQuoteRequest $args
     * @return CreateQuoteResponse
     */
    public function createQuote(CreateQuoteRequest $args)
    {
        $result = parent::createQuote($args->toArray());
        return new CreateQuoteResponse($result->toArray());
    }
}
