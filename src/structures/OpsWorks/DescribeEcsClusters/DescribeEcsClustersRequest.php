<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeEcsClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $EcsClusterArns
 * @property string $StackId
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeEcsClustersRequest extends Request
{
    /**
     * @param array{
     *     EcsClusterArns?: list<string>,
     *     StackId?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
