<?php

namespace Sunaoka\Aws\Structures\OpsWorks\GrantAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int $ValidForInMinutes
 */
class GrantAccessRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ValidForInMinutes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
