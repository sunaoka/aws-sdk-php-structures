<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchTopics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringLike' $Operator
 * @property 'QUICKSIGHT_USER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'TOPIC_NAME' $Name
 * @property string $Value
 */
class TopicSearchFilter extends Shape
{
    /**
     * @param array{
     *     Operator: 'StringEquals'|'StringLike',
     *     Name: 'QUICKSIGHT_USER'|'QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'TOPIC_NAME',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
