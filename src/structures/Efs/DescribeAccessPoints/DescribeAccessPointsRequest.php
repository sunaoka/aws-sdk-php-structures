<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeAccessPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 * @property string $AccessPointId
 * @property string $FileSystemId
 */
class DescribeAccessPointsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, max>,
     *     NextToken?: string,
     *     AccessPointId?: string,
     *     FileSystemId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
