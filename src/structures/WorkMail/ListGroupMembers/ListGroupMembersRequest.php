<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $GroupId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListGroupMembersRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     GroupId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
