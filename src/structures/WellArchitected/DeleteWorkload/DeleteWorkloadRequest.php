<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $ClientRequestToken
 */
class DeleteWorkloadRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
