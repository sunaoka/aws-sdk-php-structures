<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp;

trait CreateWebAppTrait
{
    /**
     * @param CreateWebAppRequest $args
     * @return CreateWebAppResponse
     */
    public function createWebApp(CreateWebAppRequest $args)
    {
        $result = parent::createWebApp($args->toArray());
        return new CreateWebAppResponse($result->toArray());
    }
}
