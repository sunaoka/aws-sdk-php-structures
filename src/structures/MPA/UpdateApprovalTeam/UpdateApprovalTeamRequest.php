<?php

namespace Sunaoka\Aws\Structures\MPA\UpdateApprovalTeam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ApprovalStrategy|null $ApprovalStrategy
 * @property list<Shapes\ApprovalTeamRequestApprover>|null $Approvers
 * @property string|null $Description
 * @property string $Arn
 * @property list<'SYNCHRONIZE_MFA_DEVICES'>|null $UpdateActions
 */
class UpdateApprovalTeamRequest extends Request
{
    /**
     * @param array{
     *     ApprovalStrategy?: Shapes\ApprovalStrategy|null,
     *     Approvers?: list<Shapes\ApprovalTeamRequestApprover>|null,
     *     Description?: string|null,
     *     Arn: string,
     *     UpdateActions?: list<'SYNCHRONIZE_MFA_DEVICES'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
