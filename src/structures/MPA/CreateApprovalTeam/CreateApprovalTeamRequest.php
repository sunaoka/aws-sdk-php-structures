<?php

namespace Sunaoka\Aws\Structures\MPA\CreateApprovalTeam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property Shapes\ApprovalStrategy $ApprovalStrategy
 * @property list<Shapes\ApprovalTeamRequestApprover> $Approvers
 * @property string $Description
 * @property list<Shapes\PolicyReference> $Policies
 * @property string $Name
 * @property array<string, string>|null $Tags
 */
class CreateApprovalTeamRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ApprovalStrategy: Shapes\ApprovalStrategy,
     *     Approvers: list<Shapes\ApprovalTeamRequestApprover>,
     *     Description: string,
     *     Policies: list<Shapes\PolicyReference>,
     *     Name: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
