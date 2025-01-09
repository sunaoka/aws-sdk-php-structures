<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB' $targetGroupType
 * @property string $vpcIdentifier
 */
class ListTargetGroupsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     targetGroupType?: 'IP'|'LAMBDA'|'INSTANCE'|'ALB',
     *     vpcIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
