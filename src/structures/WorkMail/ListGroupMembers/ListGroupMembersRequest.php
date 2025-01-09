<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $GroupId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListGroupMembersRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     GroupId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
