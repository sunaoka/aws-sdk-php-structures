<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyQev2IdcApplication;

trait ModifyQev2IdcApplicationTrait
{
    /**
     * @param ModifyQev2IdcApplicationRequest $args
     * @return ModifyQev2IdcApplicationResponse
     */
    public function modifyQev2IdcApplication(ModifyQev2IdcApplicationRequest $args)
    {
        $result = parent::modifyQev2IdcApplication($args->toArray());
        return new ModifyQev2IdcApplicationResponse($result->toArray());
    }
}
