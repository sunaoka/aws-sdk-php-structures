<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListAccountPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1024>|null $maxResults
 * @property string|null $nextToken
 * @property 'EC2'|'ECR'|'LAMBDA'|null $service
 */
class ListAccountPermissionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1024>|null,
     *     nextToken?: string|null,
     *     service?: 'EC2'|'ECR'|'LAMBDA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
