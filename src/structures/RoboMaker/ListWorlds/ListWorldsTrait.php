<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorlds;

trait ListWorldsTrait
{
    /**
     * @param ListWorldsRequest $args
     * @return ListWorldsResponse
     */
    public function listWorlds(ListWorldsRequest $args)
    {
        $result = parent::listWorlds($args->toArray());
        return new ListWorldsResponse($result->toArray());
    }
}
