<?php

namespace Sunaoka\Aws\Structures\Appstream\StopImageBuilder;

trait StopImageBuilderTrait
{
    /**
     * @param StopImageBuilderRequest $args
     * @return StopImageBuilderResponse
     */
    public function stopImageBuilder(StopImageBuilderRequest $args)
    {
        $result = parent::stopImageBuilder($args->toArray());
        return new StopImageBuilderResponse($result->toArray());
    }
}
