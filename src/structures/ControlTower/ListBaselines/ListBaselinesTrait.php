<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListBaselines;

trait ListBaselinesTrait
{
    /**
     * @param ListBaselinesRequest $args
     * @return ListBaselinesResponse
     */
    public function listBaselines(ListBaselinesRequest $args)
    {
        $result = parent::listBaselines($args->toArray());
        return new ListBaselinesResponse($result->toArray());
    }
}
