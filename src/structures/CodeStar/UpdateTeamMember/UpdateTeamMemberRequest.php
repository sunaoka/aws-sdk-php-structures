<?php

namespace Sunaoka\Aws\Structures\CodeStar\UpdateTeamMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string $userArn
 * @property string|null $projectRole
 * @property bool|null $remoteAccessAllowed
 */
class UpdateTeamMemberRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     userArn: string,
     *     projectRole?: string|null,
     *     remoteAccessAllowed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
