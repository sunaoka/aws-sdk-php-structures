<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListImpersonationRoles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListImpersonationRolesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
