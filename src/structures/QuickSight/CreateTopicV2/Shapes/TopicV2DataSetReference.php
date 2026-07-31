<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopicV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetArn
 * @property string|null $DataSetName
 */
class TopicV2DataSetReference extends Shape
{
    /**
     * @param array{
     *     DataSetArn: string,
     *     DataSetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
