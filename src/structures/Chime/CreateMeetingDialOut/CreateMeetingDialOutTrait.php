<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeetingDialOut;

trait CreateMeetingDialOutTrait
{
    /**
     * @param CreateMeetingDialOutRequest $args
     * @return CreateMeetingDialOutResponse
     */
    public function createMeetingDialOut(CreateMeetingDialOutRequest $args)
    {
        $result = parent::createMeetingDialOut($args->toArray());
        return new CreateMeetingDialOutResponse($result->toArray());
    }
}
