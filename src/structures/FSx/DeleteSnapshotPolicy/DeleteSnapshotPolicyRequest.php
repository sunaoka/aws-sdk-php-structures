<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapshotPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $SnapshotPolicyId
 */
class DeleteSnapshotPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     SnapshotPolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
