<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexesForMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $Region
 * @property string|null $Arn
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 */
class MemberIndex extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Region?: string|null,
     *     Arn?: string|null,
     *     Type?: 'LOCAL'|'AGGREGATOR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
