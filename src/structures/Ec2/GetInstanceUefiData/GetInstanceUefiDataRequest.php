<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceUefiData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool|null $DryRun
 */
class GetInstanceUefiDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
