<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImagePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int $MaxResults
 * @property list<string> $SharedAwsAccountIds
 * @property string $NextToken
 */
class DescribeImagePermissionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MaxResults?: int,
     *     SharedAwsAccountIds?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
