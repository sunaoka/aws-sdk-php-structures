<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateInput;

trait UpdateInputTrait
{
    /**
     * @param UpdateInputRequest $args
     * @return UpdateInputResponse
     */
    public function updateInput(UpdateInputRequest $args)
    {
        $result = parent::updateInput($args->toArray());
        return new UpdateInputResponse($result->toArray());
    }
}
