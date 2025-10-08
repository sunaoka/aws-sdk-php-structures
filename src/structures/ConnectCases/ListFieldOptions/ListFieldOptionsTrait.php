<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListFieldOptions;

trait ListFieldOptionsTrait
{
    /**
     * @param ListFieldOptionsRequest $args
     * @return ListFieldOptionsResponse
     */
    public function listFieldOptions(ListFieldOptionsRequest $args)
    {
        $result = parent::listFieldOptions($args->toArray());
        return new ListFieldOptionsResponse($result->toArray());
    }
}
