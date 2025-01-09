<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfilePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityProfileId
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListSecurityProfilePermissionsRequest extends Request
{
    /**
     * @param array{
     *     SecurityProfileId: string,
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
