<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopicV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property list<TopicV2DataSetReference>|null $DataSets
 * @property list<TopicV2DataSetRelation>|null $DataSetRelations
 */
class TopicV2Details extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DataSets?: list<TopicV2DataSetReference>|null,
     *     DataSetRelations?: list<TopicV2DataSetRelation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
