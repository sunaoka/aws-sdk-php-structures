<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateQev2IdcApplication;

trait CreateQev2IdcApplicationTrait
{
    /**
     * @param CreateQev2IdcApplicationRequest $args
     * @return CreateQev2IdcApplicationResponse
     */
    public function createQev2IdcApplication(CreateQev2IdcApplicationRequest $args)
    {
        $result = parent::createQev2IdcApplication($args->toArray());
        return new CreateQev2IdcApplicationResponse($result->toArray());
    }
}
