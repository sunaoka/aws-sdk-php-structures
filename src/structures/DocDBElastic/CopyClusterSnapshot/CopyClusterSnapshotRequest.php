<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\CopyClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $copyTags
 * @property string|null $kmsKeyId
 * @property string $snapshotArn
 * @property array<string, string>|null $tags
 * @property string $targetSnapshotName
 */
class CopyClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     copyTags?: bool|null,
     *     kmsKeyId?: string|null,
     *     snapshotArn: string,
     *     tags?: array<string, string>|null,
     *     targetSnapshotName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
