<?php

namespace Sunaoka\Aws\Structures\Ecs\PutAccountSettingDefault;

trait PutAccountSettingDefaultTrait
{
    /**
     * @param PutAccountSettingDefaultRequest $args
     * @return PutAccountSettingDefaultResponse
     */
    public function putAccountSettingDefault(PutAccountSettingDefaultRequest $args)
    {
        $result = parent::putAccountSettingDefault($args->toArray());
        return new PutAccountSettingDefaultResponse($result->toArray());
    }
}
