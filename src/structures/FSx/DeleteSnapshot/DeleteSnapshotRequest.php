<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $SnapshotId
 */
class DeleteSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
