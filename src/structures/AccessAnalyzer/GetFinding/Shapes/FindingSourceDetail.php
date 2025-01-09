<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessPointArn
 * @property string $accessPointAccount
 */
class FindingSourceDetail extends Shape
{
    /**
     * @param array{
     *     accessPointArn?: string,
     *     accessPointAccount?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
