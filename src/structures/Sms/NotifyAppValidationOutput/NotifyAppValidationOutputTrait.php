<?php

namespace Sunaoka\Aws\Structures\Sms\NotifyAppValidationOutput;

trait NotifyAppValidationOutputTrait
{
    /**
     * @param NotifyAppValidationOutputRequest $args
     * @return NotifyAppValidationOutputResponse
     */
    public function notifyAppValidationOutput(NotifyAppValidationOutputRequest $args)
    {
        $result = parent::notifyAppValidationOutput($args->toArray());
        return new NotifyAppValidationOutputResponse($result->toArray());
    }
}
