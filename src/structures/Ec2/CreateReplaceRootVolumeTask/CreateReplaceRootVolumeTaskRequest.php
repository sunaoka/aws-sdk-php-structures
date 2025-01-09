<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReplaceRootVolumeTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $SnapshotId
 * @property string $ClientToken
 * @property bool $DryRun
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ImageId
 * @property bool $DeleteReplacedRootVolume
 */
class CreateReplaceRootVolumeTaskRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     SnapshotId?: string,
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ImageId?: string,
     *     DeleteReplacedRootVolume?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
