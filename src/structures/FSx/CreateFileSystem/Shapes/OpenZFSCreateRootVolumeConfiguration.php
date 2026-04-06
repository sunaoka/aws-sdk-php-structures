<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<4, 4096>|null $RecordSizeKiB
 * @property 'NONE'|'ZSTD'|'LZ4'|null $DataCompressionType
 * @property list<OpenZFSNfsExport>|null $NfsExports
 * @property list<OpenZFSUserOrGroupQuota>|null $UserAndGroupQuotas
 * @property bool|null $CopyTagsToSnapshots
 * @property bool|null $ReadOnly
 */
class OpenZFSCreateRootVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     RecordSizeKiB?: int<4, 4096>|null,
     *     DataCompressionType?: 'NONE'|'ZSTD'|'LZ4'|null,
     *     NfsExports?: list<OpenZFSNfsExport>|null,
     *     UserAndGroupQuotas?: list<OpenZFSUserOrGroupQuota>|null,
     *     CopyTagsToSnapshots?: bool|null,
     *     ReadOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
