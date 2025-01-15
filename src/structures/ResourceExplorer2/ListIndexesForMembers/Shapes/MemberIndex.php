<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexesForMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $Arn
 * @property string|null $Region
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 */
class MemberIndex extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Arn?: string|null,
     *     Region?: string|null,
     *     Type?: 'LOCAL'|'AGGREGATOR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
