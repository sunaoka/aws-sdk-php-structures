<?php

namespace Sunaoka\Aws\Structures\CodeStar\DisassociateTeamMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string $userArn
 */
class DisassociateTeamMemberRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     userArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
