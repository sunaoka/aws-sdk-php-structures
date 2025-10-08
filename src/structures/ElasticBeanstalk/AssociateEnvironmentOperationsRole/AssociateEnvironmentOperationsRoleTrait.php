<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\AssociateEnvironmentOperationsRole;

trait AssociateEnvironmentOperationsRoleTrait
{
    /**
     * @param AssociateEnvironmentOperationsRoleRequest $args
     * @return void
     */
    public function associateEnvironmentOperationsRole(AssociateEnvironmentOperationsRoleRequest $args)
    {
        parent::associateEnvironmentOperationsRole($args->toArray());
    }
}
