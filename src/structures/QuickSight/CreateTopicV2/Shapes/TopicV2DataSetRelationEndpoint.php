<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopicV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetArn
 * @property list<string> $ColumnNames
 */
class TopicV2DataSetRelationEndpoint extends Shape
{
    /**
     * @param array{
     *     DataSetArn: string,
     *     ColumnNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
