<?php

namespace Sunaoka\Aws\Structures\QApps\CreateQApp;

trait CreateQAppTrait
{
    /**
     * @param CreateQAppRequest $args
     * @return CreateQAppResponse
     */
    public function createQApp(CreateQAppRequest $args)
    {
        $result = parent::createQApp($args->toArray());
        return new CreateQAppResponse($result->toArray());
    }
}
