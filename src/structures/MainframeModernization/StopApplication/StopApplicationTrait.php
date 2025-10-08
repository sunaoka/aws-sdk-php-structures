<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StopApplication;

trait StopApplicationTrait
{
    /**
     * @param StopApplicationRequest $args
     * @return StopApplicationResponse
     */
    public function stopApplication(StopApplicationRequest $args)
    {
        $result = parent::stopApplication($args->toArray());
        return new StopApplicationResponse($result->toArray());
    }
}
