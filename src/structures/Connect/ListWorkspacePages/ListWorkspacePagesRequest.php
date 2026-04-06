<?php

namespace Sunaoka\Aws\Structures\Connect\ListWorkspacePages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListWorkspacePagesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
