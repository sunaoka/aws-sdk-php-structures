<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetSuite;

trait GetSuiteTrait
{
    /**
     * @param GetSuiteRequest $args
     * @return GetSuiteResponse
     */
    public function getSuite(GetSuiteRequest $args)
    {
        $result = parent::getSuite($args->toArray());
        return new GetSuiteResponse($result->toArray());
    }
}
