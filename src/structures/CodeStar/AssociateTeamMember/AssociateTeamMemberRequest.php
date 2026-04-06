<?php

namespace Sunaoka\Aws\Structures\CodeStar\AssociateTeamMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string|null $clientRequestToken
 * @property string $userArn
 * @property string $projectRole
 * @property bool|null $remoteAccessAllowed
 */
class AssociateTeamMemberRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     clientRequestToken?: string|null,
     *     userArn: string,
     *     projectRole: string,
     *     remoteAccessAllowed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
