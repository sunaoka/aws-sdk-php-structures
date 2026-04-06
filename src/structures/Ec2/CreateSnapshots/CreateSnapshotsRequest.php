<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property Shapes\InstanceSpecification $InstanceSpecification
 * @property string|null $OutpostArn
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property 'volume'|null $CopyTagsFromSource
 * @property 'regional'|'local'|null $Location
 */
class CreateSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     InstanceSpecification: Shapes\InstanceSpecification,
     *     OutpostArn?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     CopyTagsFromSource?: 'volume'|null,
     *     Location?: 'regional'|'local'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
