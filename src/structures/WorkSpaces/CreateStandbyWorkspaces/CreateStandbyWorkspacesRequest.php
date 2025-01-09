<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateStandbyWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PrimaryRegion
 * @property list<Shapes\StandbyWorkspace> $StandbyWorkspaces
 */
class CreateStandbyWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     PrimaryRegion: string,
     *     StandbyWorkspaces: list<Shapes\StandbyWorkspace>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
