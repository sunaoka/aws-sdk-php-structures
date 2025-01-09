<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateWorkloadShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $SharedWith
 * @property 'READONLY'|'CONTRIBUTOR' $PermissionType
 * @property string $ClientRequestToken
 */
class CreateWorkloadShareRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     SharedWith: string,
     *     PermissionType: 'READONLY'|'CONTRIBUTOR',
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
