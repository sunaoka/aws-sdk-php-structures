<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBClusterSnapshotIdentifier
 * @property string $TargetDBClusterSnapshotIdentifier
 * @property string $KmsKeyId
 * @property string $PreSignedUrl
 * @property string $DestinationRegion
 * @property bool $CopyTags
 * @property list<Shapes\Tag> $Tags
 */
class CopyDBClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceDBClusterSnapshotIdentifier: string,
     *     TargetDBClusterSnapshotIdentifier: string,
     *     KmsKeyId?: string,
     *     PreSignedUrl?: string,
     *     DestinationRegion?: string,
     *     CopyTags?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
