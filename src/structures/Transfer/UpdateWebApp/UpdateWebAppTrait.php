<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebApp;

trait UpdateWebAppTrait
{
    /**
     * @param UpdateWebAppRequest $args
     * @return UpdateWebAppResponse
     */
    public function updateWebApp(UpdateWebAppRequest $args)
    {
        $result = parent::updateWebApp($args->toArray());
        return new UpdateWebAppResponse($result->toArray());
    }
}
