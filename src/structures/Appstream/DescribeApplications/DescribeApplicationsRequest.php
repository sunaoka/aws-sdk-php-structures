<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Arns
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class DescribeApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Arns?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
