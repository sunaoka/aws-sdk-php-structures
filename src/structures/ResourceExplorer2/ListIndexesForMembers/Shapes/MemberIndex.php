<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexesForMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Arn
 * @property string $Region
 * @property 'LOCAL'|'AGGREGATOR' $Type
 */
class MemberIndex extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Arn?: string,
     *     Region?: string,
     *     Type?: 'LOCAL'|'AGGREGATOR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
