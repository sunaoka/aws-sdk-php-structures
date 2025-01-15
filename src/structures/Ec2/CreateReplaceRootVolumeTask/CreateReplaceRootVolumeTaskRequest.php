<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReplaceRootVolumeTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $SnapshotId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ImageId
 * @property bool|null $DeleteReplacedRootVolume
 */
class CreateReplaceRootVolumeTaskRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     SnapshotId?: string|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ImageId?: string|null,
     *     DeleteReplacedRootVolume?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
