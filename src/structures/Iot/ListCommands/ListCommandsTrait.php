<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommands;

trait ListCommandsTrait
{
    /**
     * @param ListCommandsRequest $args
     * @return ListCommandsResponse
     */
    public function listCommands(ListCommandsRequest $args)
    {
        $result = parent::listCommands($args->toArray());
        return new ListCommandsResponse($result->toArray());
    }
}
