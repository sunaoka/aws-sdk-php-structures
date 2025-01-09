<?php

namespace Sunaoka\Aws\Structures\Neptune\CopyDBClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBClusterSnapshotIdentifier
 * @property string $TargetDBClusterSnapshotIdentifier
 * @property string $KmsKeyId
 * @property string $PreSignedUrl
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
     *     CopyTags?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
