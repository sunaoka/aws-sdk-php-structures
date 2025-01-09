<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $Name
 * @property string $SnapshotId
 */
class UpdateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     Name: string,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
