<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $usage
 * @property string|null $replacedWith
 * @property string|null $stopServingVersion
 * @property string|null $startServingReplacementVersion
 * @property list<ClientStat>|null $clientStats
 */
class DeprecationDetail extends Shape
{
    /**
     * @param array{
     *     usage?: string|null,
     *     replacedWith?: string|null,
     *     stopServingVersion?: string|null,
     *     startServingReplacementVersion?: string|null,
     *     clientStats?: list<ClientStat>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
