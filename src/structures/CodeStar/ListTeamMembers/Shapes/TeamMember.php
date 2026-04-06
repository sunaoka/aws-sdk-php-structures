<?php

namespace Sunaoka\Aws\Structures\CodeStar\ListTeamMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userArn
 * @property string $projectRole
 * @property bool|null $remoteAccessAllowed
 */
class TeamMember extends Shape
{
    /**
     * @param array{
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
