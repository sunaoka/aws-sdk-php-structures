<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliasPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeConnectionAliasPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AliasId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
