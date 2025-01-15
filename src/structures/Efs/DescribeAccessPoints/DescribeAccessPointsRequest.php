<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeAccessPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $AccessPointId
 * @property string|null $FileSystemId
 */
class DescribeAccessPointsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null,
     *     AccessPointId?: string|null,
     *     FileSystemId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
