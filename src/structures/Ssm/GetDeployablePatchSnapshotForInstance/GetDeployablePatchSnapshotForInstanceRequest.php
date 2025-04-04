<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDeployablePatchSnapshotForInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $SnapshotId
 * @property Shapes\BaselineOverride|null $BaselineOverride
 */
class GetDeployablePatchSnapshotForInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     SnapshotId: string,
     *     BaselineOverride?: Shapes\BaselineOverride|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
