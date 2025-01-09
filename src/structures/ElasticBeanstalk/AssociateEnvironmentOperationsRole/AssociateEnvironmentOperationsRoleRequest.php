<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\AssociateEnvironmentOperationsRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentName
 * @property string $OperationsRole
 */
class AssociateEnvironmentOperationsRoleRequest extends Request
{
    /**
     * @param array{
     *     EnvironmentName: string,
     *     OperationsRole: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
