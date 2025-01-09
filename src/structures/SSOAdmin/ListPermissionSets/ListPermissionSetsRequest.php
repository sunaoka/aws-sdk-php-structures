<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListPermissionSetsRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
