<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexPrograms;

trait ListMultiplexProgramsTrait
{
    /**
     * @param ListMultiplexProgramsRequest $args
     * @return ListMultiplexProgramsResponse
     */
    public function listMultiplexPrograms(ListMultiplexProgramsRequest $args)
    {
        $result = parent::listMultiplexPrograms($args->toArray());
        return new ListMultiplexProgramsResponse($result->toArray());
    }
}
