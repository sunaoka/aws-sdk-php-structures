<?php

namespace Sunaoka\Aws\Structures\MPA\GetApprovalTeam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetApprovalTeamRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
