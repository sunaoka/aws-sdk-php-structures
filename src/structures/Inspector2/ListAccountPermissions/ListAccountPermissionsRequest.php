<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListAccountPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'EC2'|'ECR'|'LAMBDA'|null $service
 * @property int<1, 1024>|null $maxResults
 * @property string|null $nextToken
 */
class ListAccountPermissionsRequest extends Request
{
    /**
     * @param array{
     *     service?: 'EC2'|'ECR'|'LAMBDA'|null,
     *     maxResults?: int<1, 1024>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
