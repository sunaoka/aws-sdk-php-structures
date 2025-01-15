<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessPointArn
 * @property string|null $accessPointAccount
 */
class FindingSourceDetail extends Shape
{
    /**
     * @param array{
     *     accessPointArn?: string|null,
     *     accessPointAccount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
