<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailboxPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $EntityId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListMailboxPermissionsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     EntityId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
