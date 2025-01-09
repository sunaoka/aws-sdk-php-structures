<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListAccountPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1024> $maxResults
 * @property string $nextToken
 * @property 'EC2'|'ECR'|'LAMBDA' $service
 */
class ListAccountPermissionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1024>,
     *     nextToken?: string,
     *     service?: 'EC2'|'ECR'|'LAMBDA'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
