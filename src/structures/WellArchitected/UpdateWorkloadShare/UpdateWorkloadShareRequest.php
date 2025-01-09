<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateWorkloadShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShareId
 * @property string $WorkloadId
 * @property 'READONLY'|'CONTRIBUTOR' $PermissionType
 */
class UpdateWorkloadShareRequest extends Request
{
    /**
     * @param array{
     *     ShareId: string,
     *     WorkloadId: string,
     *     PermissionType: 'READONLY'|'CONTRIBUTOR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
