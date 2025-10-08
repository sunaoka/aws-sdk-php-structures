<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCalendarState;

trait GetCalendarStateTrait
{
    /**
     * @param GetCalendarStateRequest $args
     * @return GetCalendarStateResponse
     */
    public function getCalendarState(GetCalendarStateRequest $args)
    {
        $result = parent::getCalendarState($args->toArray());
        return new GetCalendarStateResponse($result->toArray());
    }
}
