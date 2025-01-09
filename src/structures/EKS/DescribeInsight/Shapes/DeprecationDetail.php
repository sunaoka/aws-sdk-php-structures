<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $usage
 * @property string $replacedWith
 * @property string $stopServingVersion
 * @property string $startServingReplacementVersion
 * @property list<ClientStat> $clientStats
 */
class DeprecationDetail extends Shape
{
    /**
     * @param array{
     *     usage?: string,
     *     replacedWith?: string,
     *     stopServingVersion?: string,
     *     startServingReplacementVersion?: string,
     *     clientStats?: list<ClientStat>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
