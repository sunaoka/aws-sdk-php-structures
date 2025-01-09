<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterRdsDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $RdsDbInstanceArn
 * @property string $DbUser
 * @property string $DbPassword
 */
class RegisterRdsDbInstanceRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     RdsDbInstanceArn: string,
     *     DbUser: string,
     *     DbPassword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
