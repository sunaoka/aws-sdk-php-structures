<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListPermissionSetsRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
