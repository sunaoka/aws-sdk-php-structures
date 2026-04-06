<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 * @property list<'APPLICATION'> $AssociatedResourceTypes
 */
class DescribeWorkspaceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceId: string,
     *     AssociatedResourceTypes: list<'APPLICATION'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
