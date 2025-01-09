<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $OutpostArn
 * @property string $VolumeId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property 'regional'|'local' $Location
 * @property bool $DryRun
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     OutpostArn?: string,
     *     VolumeId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     Location?: 'regional'|'local',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
