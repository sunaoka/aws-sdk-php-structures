<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteWorkloadShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShareId
 * @property string $WorkloadId
 * @property string $ClientRequestToken
 */
class DeleteWorkloadShareRequest extends Request
{
    /**
     * @param array{
     *     ShareId: string,
     *     WorkloadId: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
