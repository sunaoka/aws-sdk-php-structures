<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBSnapshotIdentifier
 * @property string $TargetDBSnapshotIdentifier
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 * @property bool $CopyTags
 * @property string $PreSignedUrl
 * @property string $DestinationRegion
 * @property string $OptionGroupName
 * @property string $TargetCustomAvailabilityZone
 * @property bool $CopyOptionGroup
 */
class CopyDBSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceDBSnapshotIdentifier: string,
     *     TargetDBSnapshotIdentifier: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>,
     *     CopyTags?: bool,
     *     PreSignedUrl?: string,
     *     DestinationRegion?: string,
     *     OptionGroupName?: string,
     *     TargetCustomAvailabilityZone?: string,
     *     CopyOptionGroup?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
