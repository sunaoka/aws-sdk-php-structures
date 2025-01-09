<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\CopyClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $copyTags
 * @property string $kmsKeyId
 * @property string $snapshotArn
 * @property array<string, string> $tags
 * @property string $targetSnapshotName
 */
class CopyClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     copyTags?: bool,
     *     kmsKeyId?: string,
     *     snapshotArn: string,
     *     tags?: array<string, string>,
     *     targetSnapshotName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
