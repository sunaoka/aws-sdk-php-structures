<?php

namespace Sunaoka\Aws\Structures\Ec2\GetConsoleOutput;

trait GetConsoleOutputTrait
{
    /**
     * @param GetConsoleOutputRequest $args
     * @return GetConsoleOutputResponse
     */
    public function getConsoleOutput(GetConsoleOutputRequest $args)
    {
        $result = parent::getConsoleOutput($args->toArray());
        return new GetConsoleOutputResponse($result->toArray());
    }
}
