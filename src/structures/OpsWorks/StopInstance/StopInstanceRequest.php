<?php

namespace Sunaoka\Aws\Structures\OpsWorks\StopInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool $Force
 */
class StopInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
