<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComponentId
 * @property string $ComponentArn
 */
class AlternatePathHint extends Shape
{
    /**
     * @param array{
     *     ComponentId?: string,
     *     ComponentArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
