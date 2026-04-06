<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines;

trait ListEnabledBaselinesTrait
{
    /**
     * @param ListEnabledBaselinesRequest $args
     * @return ListEnabledBaselinesResponse
     */
    public function listEnabledBaselines(ListEnabledBaselinesRequest $args)
    {
        $result = parent::listEnabledBaselines($args->toArray());
        return new ListEnabledBaselinesResponse($result->toArray());
    }
}
