<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImagePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<0, 500> $MaxResults
 * @property list<string> $SharedAwsAccountIds
 * @property string $NextToken
 */
class DescribeImagePermissionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MaxResults?: int<0, 500>,
     *     SharedAwsAccountIds?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
