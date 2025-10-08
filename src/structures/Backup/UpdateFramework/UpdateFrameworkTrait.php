<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateFramework;

trait UpdateFrameworkTrait
{
    /**
     * @param UpdateFrameworkRequest $args
     * @return UpdateFrameworkResponse
     */
    public function updateFramework(UpdateFrameworkRequest $args)
    {
        $result = parent::updateFramework($args->toArray());
        return new UpdateFrameworkResponse($result->toArray());
    }
}
