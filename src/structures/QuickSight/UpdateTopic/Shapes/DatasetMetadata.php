<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetArn
 * @property string $DatasetName
 * @property string $DatasetDescription
 * @property DataAggregation $DataAggregation
 * @property list<TopicFilter> $Filters
 * @property list<TopicColumn> $Columns
 * @property list<TopicCalculatedField> $CalculatedFields
 * @property list<TopicNamedEntity> $NamedEntities
 */
class DatasetMetadata extends Shape
{
    /**
     * @param array{
     *     DatasetArn: string,
     *     DatasetName?: string,
     *     DatasetDescription?: string,
     *     DataAggregation?: DataAggregation,
     *     Filters?: list<TopicFilter>,
     *     Columns?: list<TopicColumn>,
     *     CalculatedFields?: list<TopicCalculatedField>,
     *     NamedEntities?: list<TopicNamedEntity>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
