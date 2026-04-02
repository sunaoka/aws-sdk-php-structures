<?php

namespace Sunaoka\Aws\Structures\Appstream\DrainSessionInstance;

trait DrainSessionInstanceTrait
{
    /**
     * @param DrainSessionInstanceRequest $args
     * @return DrainSessionInstanceResponse
     */
    public function drainSessionInstance(DrainSessionInstanceRequest $args)
    {
        $result = parent::drainSessionInstance($args->toArray());
        return new DrainSessionInstanceResponse($result->toArray());
    }
}
