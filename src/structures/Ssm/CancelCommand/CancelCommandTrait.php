<?php

namespace Sunaoka\Aws\Structures\Ssm\CancelCommand;

trait CancelCommandTrait
{
    /**
     * @param CancelCommandRequest $args
     * @return CancelCommandResponse
     */
    public function cancelCommand(CancelCommandRequest $args)
    {
        $result = parent::cancelCommand($args->toArray());
        return new CancelCommandResponse($result->toArray());
    }
}
