<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<4, 4096> $RecordSizeKiB
 * @property 'NONE'|'ZSTD'|'LZ4' $DataCompressionType
 * @property list<OpenZFSNfsExport> $NfsExports
 * @property list<OpenZFSUserOrGroupQuota> $UserAndGroupQuotas
 * @property bool $CopyTagsToSnapshots
 * @property bool $ReadOnly
 */
class OpenZFSCreateRootVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     RecordSizeKiB?: int<4, 4096>,
     *     DataCompressionType?: 'NONE'|'ZSTD'|'LZ4',
     *     NfsExports?: list<OpenZFSNfsExport>,
     *     UserAndGroupQuotas?: list<OpenZFSUserOrGroupQuota>,
     *     CopyTagsToSnapshots?: bool,
     *     ReadOnly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
