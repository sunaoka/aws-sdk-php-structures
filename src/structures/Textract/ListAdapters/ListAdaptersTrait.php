<?php

namespace Sunaoka\Aws\Structures\Textract\ListAdapters;

trait ListAdaptersTrait
{
    /**
     * @param ListAdaptersRequest $args
     * @return ListAdaptersResponse
     */
    public function listAdapters(ListAdaptersRequest $args)
    {
        $result = parent::listAdapters($args->toArray());
        return new ListAdaptersResponse($result->toArray());
    }
}
