<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGULAR'|'RANGE'|'COLLECTIVE' $ConstantType
 * @property string $Value
 * @property string $Minimum
 * @property string $Maximum
 * @property list<CollectiveConstantEntry> $ValueList
 */
class TopicConstantValue extends Shape
{
    /**
     * @param array{
     *     ConstantType?: 'SINGULAR'|'RANGE'|'COLLECTIVE',
     *     Value?: string,
     *     Minimum?: string,
     *     Maximum?: string,
     *     ValueList?: list<CollectiveConstantEntry>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
