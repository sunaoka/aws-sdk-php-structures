<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliasPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 */
class DescribeConnectionAliasPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AliasId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
