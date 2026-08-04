<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyApplicationStatusCheck;

trait ModifyApplicationStatusCheckTrait
{
    /**
     * @param ModifyApplicationStatusCheckRequest $args
     * @return ModifyApplicationStatusCheckResponse
     */
    public function modifyApplicationStatusCheck(ModifyApplicationStatusCheckRequest $args)
    {
        $result = parent::modifyApplicationStatusCheck($args->toArray());
        return new ModifyApplicationStatusCheckResponse($result->toArray());
    }
}
