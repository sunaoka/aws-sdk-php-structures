<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovmImageBuilds;

trait ListMicrovmImageBuildsTrait
{
    /**
     * @param ListMicrovmImageBuildsRequest $args
     * @return ListMicrovmImageBuildsResponse
     */
    public function listMicrovmImageBuilds(ListMicrovmImageBuildsRequest $args)
    {
        $result = parent::listMicrovmImageBuilds($args->toArray());
        return new ListMicrovmImageBuildsResponse($result->toArray());
    }
}
