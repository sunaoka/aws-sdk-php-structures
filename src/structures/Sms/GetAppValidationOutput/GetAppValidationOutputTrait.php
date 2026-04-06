<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationOutput;

trait GetAppValidationOutputTrait
{
    /**
     * @param GetAppValidationOutputRequest $args
     * @return GetAppValidationOutputResponse
     */
    public function getAppValidationOutput(GetAppValidationOutputRequest $args)
    {
        $result = parent::getAppValidationOutput($args->toArray());
        return new GetAppValidationOutputResponse($result->toArray());
    }
}
