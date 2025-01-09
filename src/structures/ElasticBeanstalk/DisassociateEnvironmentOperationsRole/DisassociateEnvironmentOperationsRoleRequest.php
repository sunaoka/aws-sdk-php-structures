<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DisassociateEnvironmentOperationsRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnvironmentName
 */
class DisassociateEnvironmentOperationsRoleRequest extends Request
{
    /**
     * @param array{EnvironmentName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
