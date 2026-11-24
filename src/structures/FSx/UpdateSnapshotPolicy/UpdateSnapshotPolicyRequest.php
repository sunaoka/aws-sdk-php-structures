<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshotPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $SnapshotPolicyId
 * @property bool|null $Enabled
 */
class UpdateSnapshotPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     SnapshotPolicyId: string,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
