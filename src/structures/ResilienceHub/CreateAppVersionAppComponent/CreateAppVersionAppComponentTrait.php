<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateAppVersionAppComponent;

trait CreateAppVersionAppComponentTrait
{
    /**
     * @param CreateAppVersionAppComponentRequest $args
     * @return CreateAppVersionAppComponentResponse
     */
    public function createAppVersionAppComponent(CreateAppVersionAppComponentRequest $args)
    {
        $result = parent::createAppVersionAppComponent($args->toArray());
        return new CreateAppVersionAppComponentResponse($result->toArray());
    }
}
