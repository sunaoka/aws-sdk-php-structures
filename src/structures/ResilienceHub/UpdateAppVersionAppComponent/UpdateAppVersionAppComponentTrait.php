<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateAppVersionAppComponent;

trait UpdateAppVersionAppComponentTrait
{
    /**
     * @param UpdateAppVersionAppComponentRequest $args
     * @return UpdateAppVersionAppComponentResponse
     */
    public function updateAppVersionAppComponent(UpdateAppVersionAppComponentRequest $args)
    {
        $result = parent::updateAppVersionAppComponent($args->toArray());
        return new UpdateAppVersionAppComponentResponse($result->toArray());
    }
}
