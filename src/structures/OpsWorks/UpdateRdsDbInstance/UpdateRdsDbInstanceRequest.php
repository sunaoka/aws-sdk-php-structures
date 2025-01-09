<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateRdsDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RdsDbInstanceArn
 * @property string $DbUser
 * @property string $DbPassword
 */
class UpdateRdsDbInstanceRequest extends Request
{
    /**
     * @param array{
     *     RdsDbInstanceArn: string,
     *     DbUser?: string,
     *     DbPassword?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
