<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListFields;

trait ListFieldsTrait
{
    /**
     * @param ListFieldsRequest $args
     * @return ListFieldsResponse
     */
    public function listFields(ListFieldsRequest $args)
    {
        $result = parent::listFields($args->toArray());
        return new ListFieldsResponse($result->toArray());
    }
}
