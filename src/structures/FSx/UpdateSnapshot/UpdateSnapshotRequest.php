<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $Name
 * @property string $SnapshotId
 */
class UpdateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     Name: string,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
