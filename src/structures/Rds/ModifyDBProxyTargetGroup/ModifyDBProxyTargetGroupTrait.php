<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxyTargetGroup;

trait ModifyDBProxyTargetGroupTrait
{
    /**
     * @param ModifyDBProxyTargetGroupRequest $args
     * @return ModifyDBProxyTargetGroupResponse
     */
    public function modifyDBProxyTargetGroup(ModifyDBProxyTargetGroupRequest $args)
    {
        $result = parent::modifyDBProxyTargetGroup($args->toArray());
        return new ModifyDBProxyTargetGroupResponse($result->toArray());
    }
}
