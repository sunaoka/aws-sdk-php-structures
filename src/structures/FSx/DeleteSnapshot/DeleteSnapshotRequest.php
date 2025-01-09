<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $SnapshotId
 */
class DeleteSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
