<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetSnapshotAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'productCodes'|'createVolumePermission' $Attribute
 * @property string $SnapshotId
 * @property bool|null $DryRun
 */
class ResetSnapshotAttributeRequest extends Request
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
