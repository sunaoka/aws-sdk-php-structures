<?php

namespace Sunaoka\Aws\Structures\GameSparks\ExportSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property string $SnapshotId
 */
class ExportSnapshotRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
