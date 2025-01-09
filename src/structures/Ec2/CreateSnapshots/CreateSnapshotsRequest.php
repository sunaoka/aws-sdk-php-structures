<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property Shapes\InstanceSpecification $InstanceSpecification
 * @property string $OutpostArn
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property 'volume' $CopyTagsFromSource
 * @property 'regional'|'local' $Location
 */
class CreateSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     InstanceSpecification: Shapes\InstanceSpecification,
     *     OutpostArn?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     CopyTagsFromSource?: 'volume',
     *     Location?: 'regional'|'local'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
