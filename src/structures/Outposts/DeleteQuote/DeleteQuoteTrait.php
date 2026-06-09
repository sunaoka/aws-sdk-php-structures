<?php

namespace Sunaoka\Aws\Structures\Outposts\DeleteQuote;

trait DeleteQuoteTrait
{
    /**
     * @param DeleteQuoteRequest $args
     * @return DeleteQuoteResponse
     */
    public function deleteQuote(DeleteQuoteRequest $args)
    {
        $result = parent::deleteQuote($args->toArray());
        return new DeleteQuoteResponse($result->toArray());
    }
}
