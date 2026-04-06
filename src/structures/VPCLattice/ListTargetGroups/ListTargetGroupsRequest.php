<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $vpcIdentifier
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null $targetGroupType
 */
class ListTargetGroupsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     vpcIdentifier?: string|null,
     *     targetGroupType?: 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
