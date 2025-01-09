<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DisassociateIpGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $GroupIds
 */
class DisassociateIpGroupsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     GroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
