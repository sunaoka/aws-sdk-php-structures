<?php

namespace Sunaoka\Aws\Structures\Ec2\GetConsoleScreenshot;

trait GetConsoleScreenshotTrait
{
    /**
     * @param GetConsoleScreenshotRequest $args
     * @return GetConsoleScreenshotResponse
     */
    public function getConsoleScreenshot(GetConsoleScreenshotRequest $args)
    {
        $result = parent::getConsoleScreenshot($args->toArray());
        return new GetConsoleScreenshotResponse($result->toArray());
    }
}
