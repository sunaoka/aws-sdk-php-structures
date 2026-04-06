<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans;

trait ListSpansTrait
{
    /**
     * @param ListSpansRequest $args
     * @return ListSpansResponse
     */
    public function listSpans(ListSpansRequest $args)
    {
        $result = parent::listSpans($args->toArray());
        return new ListSpansResponse($result->toArray());
    }
}
