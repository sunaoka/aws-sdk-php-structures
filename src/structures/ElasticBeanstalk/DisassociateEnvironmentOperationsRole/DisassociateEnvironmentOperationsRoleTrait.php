<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DisassociateEnvironmentOperationsRole;

trait DisassociateEnvironmentOperationsRoleTrait
{
    /**
     * @param DisassociateEnvironmentOperationsRoleRequest $args
     * @return void
     */
    public function disassociateEnvironmentOperationsRole(DisassociateEnvironmentOperationsRoleRequest $args)
    {
        parent::disassociateEnvironmentOperationsRole($args->toArray());
    }
}
