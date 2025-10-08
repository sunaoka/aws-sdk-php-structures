<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationInput;

trait AddApplicationInputTrait
{
    /**
     * @param AddApplicationInputRequest $args
     * @return AddApplicationInputResponse
     */
    public function addApplicationInput(AddApplicationInputRequest $args)
    {
        $result = parent::addApplicationInput($args->toArray());
        return new AddApplicationInputResponse($result->toArray());
    }
}
