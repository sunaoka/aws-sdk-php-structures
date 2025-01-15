<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGULAR'|'RANGE'|'COLLECTIVE'|null $ConstantType
 * @property string|null $Value
 * @property string|null $Minimum
 * @property string|null $Maximum
 * @property list<CollectiveConstantEntry>|null $ValueList
 */
class TopicConstantValue extends Shape
{
    /**
     * @param array{
     *     ConstantType?: 'SINGULAR'|'RANGE'|'COLLECTIVE'|null,
     *     Value?: string|null,
     *     Minimum?: string|null,
     *     Maximum?: string|null,
     *     ValueList?: list<CollectiveConstantEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
