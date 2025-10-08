<?php

namespace Sunaoka\Aws\Structures\ControlTower\EnableBaseline;

trait EnableBaselineTrait
{
    /**
     * @param EnableBaselineRequest $args
     * @return EnableBaselineResponse
     */
    public function enableBaseline(EnableBaselineRequest $args)
    {
        $result = parent::enableBaseline($args->toArray());
        return new EnableBaselineResponse($result->toArray());
    }
}
