<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null $targetGroupType
 * @property string|null $vpcIdentifier
 */
class ListTargetGroupsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     targetGroupType?: 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null,
     *     vpcIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
