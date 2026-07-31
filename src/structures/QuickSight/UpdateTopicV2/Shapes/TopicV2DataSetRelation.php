<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TopicV2DataSetRelationEndpoint $Left
 * @property TopicV2DataSetRelationEndpoint $Right
 */
class TopicV2DataSetRelation extends Shape
{
    /**
     * @param array{
     *     Left: TopicV2DataSetRelationEndpoint,
     *     Right: TopicV2DataSetRelationEndpoint
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
