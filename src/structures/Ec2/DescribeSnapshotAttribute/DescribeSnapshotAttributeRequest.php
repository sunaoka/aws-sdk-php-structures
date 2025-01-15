<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshotAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'productCodes'|'createVolumePermission' $Attribute
 * @property string $SnapshotId
 * @property bool|null $DryRun
 */
class DescribeSnapshotAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute: 'productCodes'|'createVolumePermission',
     *     SnapshotId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
