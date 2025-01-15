<?php

namespace Sunaoka\Aws\Structures\OpsWorks\GrantAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<60, 1440>|null $ValidForInMinutes
 */
class GrantAccessRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ValidForInMinutes?: int<60, 1440>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
