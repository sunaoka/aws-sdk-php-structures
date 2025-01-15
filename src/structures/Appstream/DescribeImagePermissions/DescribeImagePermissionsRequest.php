<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImagePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<0, 500>|null $MaxResults
 * @property list<string>|null $SharedAwsAccountIds
 * @property string|null $NextToken
 */
class DescribeImagePermissionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MaxResults?: int<0, 500>|null,
     *     SharedAwsAccountIds?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
