<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFarms;

trait ListFarmsTrait
{
    /**
     * @param ListFarmsRequest $args
     * @return ListFarmsResponse
     */
    public function listFarms(ListFarmsRequest $args)
    {
        $result = parent::listFarms($args->toArray());
        return new ListFarmsResponse($result->toArray());
    }
}
