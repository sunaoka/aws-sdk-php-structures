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
 * @property string|null $DestinationRegion
 * @property string|null $OptionGroupName
 * @property string|null $TargetCustomAvailabilityZone
 * @property bool|null $CopyOptionGroup
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
     *     DestinationRegion?: string|null,
     *     OptionGroupName?: string|null,
     *     TargetCustomAvailabilityZone?: string|null,
     *     CopyOptionGroup?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
