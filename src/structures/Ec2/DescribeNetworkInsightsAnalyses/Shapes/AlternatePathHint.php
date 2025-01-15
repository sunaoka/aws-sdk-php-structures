<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComponentId
 * @property string|null $ComponentArn
 */
class AlternatePathHint extends Shape
{
    /**
     * @param array{
     *     ComponentId?: string|null,
     *     ComponentArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
