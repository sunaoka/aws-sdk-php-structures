<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string|null $OutpostArn
 * @property string $VolumeId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'regional'|'local'|null $Location
 * @property bool|null $DryRun
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     OutpostArn?: string|null,
     *     VolumeId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     Location?: 'regional'|'local'|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
