<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputs;

trait ListInputsTrait
{
    /**
     * @param ListInputsRequest $args
     * @return ListInputsResponse
     */
    public function listInputs(ListInputsRequest $args)
    {
        $result = parent::listInputs($args->toArray());
        return new ListInputsResponse($result->toArray());
    }
}
