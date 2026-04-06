<?php

namespace Sunaoka\Aws\Structures\ControlTower\DisableBaseline;

trait DisableBaselineTrait
{
    /**
     * @param DisableBaselineRequest $args
     * @return DisableBaselineResponse
     */
    public function disableBaseline(DisableBaselineRequest $args)
    {
        $result = parent::disableBaseline($args->toArray());
        return new DisableBaselineResponse($result->toArray());
    }
}
