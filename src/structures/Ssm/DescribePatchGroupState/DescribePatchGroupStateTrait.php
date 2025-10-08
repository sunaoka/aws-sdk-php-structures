<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroupState;

trait DescribePatchGroupStateTrait
{
    /**
     * @param DescribePatchGroupStateRequest $args
     * @return DescribePatchGroupStateResponse
     */
    public function describePatchGroupState(DescribePatchGroupStateRequest $args)
    {
        $result = parent::describePatchGroupState($args->toArray());
        return new DescribePatchGroupStateResponse($result->toArray());
    }
}
