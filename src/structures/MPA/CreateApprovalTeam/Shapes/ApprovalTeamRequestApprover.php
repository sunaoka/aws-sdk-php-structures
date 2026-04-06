<?php

namespace Sunaoka\Aws\Structures\MPA\CreateApprovalTeam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryIdentityId
 * @property string $PrimaryIdentitySourceArn
 */
class ApprovalTeamRequestApprover extends Shape
{
    /**
     * @param array{
     *     PrimaryIdentityId: string,
     *     PrimaryIdentitySourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
