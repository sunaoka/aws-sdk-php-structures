<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListByoipCidrs;

trait ListByoipCidrsTrait
{
    /**
     * @param ListByoipCidrsRequest $args
     * @return ListByoipCidrsResponse
     */
    public function listByoipCidrs(ListByoipCidrsRequest $args)
    {
        $result = parent::listByoipCidrs($args->toArray());
        return new ListByoipCidrsResponse($result->toArray());
    }
}
