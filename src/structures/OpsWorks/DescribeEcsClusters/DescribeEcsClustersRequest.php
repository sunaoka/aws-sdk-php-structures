<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeEcsClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $EcsClusterArns
 * @property string|null $StackId
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class DescribeEcsClustersRequest extends Request
{
    /**
     * @param array{
     *     EcsClusterArns?: list<string>|null,
     *     StackId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
