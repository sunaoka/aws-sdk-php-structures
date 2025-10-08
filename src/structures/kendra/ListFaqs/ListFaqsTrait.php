<?php

namespace Sunaoka\Aws\Structures\kendra\ListFaqs;

trait ListFaqsTrait
{
    /**
     * @param ListFaqsRequest $args
     * @return ListFaqsResponse
     */
    public function listFaqs(ListFaqsRequest $args)
    {
        $result = parent::listFaqs($args->toArray());
        return new ListFaqsResponse($result->toArray());
    }
}
