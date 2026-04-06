<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBClusterSnapshotIdentifier
 * @property string $TargetDBClusterSnapshotIdentifier
 * @property string|null $KmsKeyId
 * @property string|null $PreSignedUrl
 * @property bool|null $CopyTags
 * @property list<Shapes\Tag>|null $Tags
 */
class CopyDBClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceDBClusterSnapshotIdentifier: string,
     *     TargetDBClusterSnapshotIdentifier: string,
     *     KmsKeyId?: string|null,
     *     PreSignedUrl?: string|null,
     *     CopyTags?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
