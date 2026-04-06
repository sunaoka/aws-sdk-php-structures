<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateRdsDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RdsDbInstanceArn
 * @property string|null $DbUser
 * @property string|null $DbPassword
 */
class UpdateRdsDbInstanceRequest extends Request
{
    /**
     * @param array{
     *     RdsDbInstanceArn: string,
     *     DbUser?: string|null,
     *     DbPassword?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
