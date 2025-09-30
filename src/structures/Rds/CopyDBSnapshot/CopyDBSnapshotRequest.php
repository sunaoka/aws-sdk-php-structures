<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBSnapshotIdentifier
 * @property string $TargetDBSnapshotIdentifier
 * @property string|null $KmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $CopyTags
 * @property string|null $PreSignedUrl
 * @property string|null $OptionGroupName
 * @property string|null $TargetCustomAvailabilityZone
 * @property string|null $SnapshotTarget
 * @property bool|null $CopyOptionGroup
 * @property string|null $SnapshotAvailabilityZone
 */
class CopyDBSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceDBSnapshotIdentifier: string,
     *     TargetDBSnapshotIdentifier: string,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     CopyTags?: bool|null,
     *     PreSignedUrl?: string|null,
     *     OptionGroupName?: string|null,
     *     TargetCustomAvailabilityZone?: string|null,
     *     SnapshotTarget?: string|null,
     *     CopyOptionGroup?: bool|null,
     *     SnapshotAvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
