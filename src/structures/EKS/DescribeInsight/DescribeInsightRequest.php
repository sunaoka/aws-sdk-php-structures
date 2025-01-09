<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $id
 */
class DescribeInsightRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
