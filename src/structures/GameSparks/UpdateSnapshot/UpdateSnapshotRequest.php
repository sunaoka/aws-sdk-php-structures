<?php

namespace Sunaoka\Aws\Structures\GameSparks\UpdateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $GameName
 * @property string $SnapshotId
 */
class UpdateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     GameName: string,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
