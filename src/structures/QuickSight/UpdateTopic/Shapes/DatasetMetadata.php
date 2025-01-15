<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetArn
 * @property string|null $DatasetName
 * @property string|null $DatasetDescription
 * @property DataAggregation|null $DataAggregation
 * @property list<TopicFilter>|null $Filters
 * @property list<TopicColumn>|null $Columns
 * @property list<TopicCalculatedField>|null $CalculatedFields
 * @property list<TopicNamedEntity>|null $NamedEntities
 */
class DatasetMetadata extends Shape
{
    /**
     * @param array{
     *     DatasetArn: string,
     *     DatasetName?: string|null,
     *     DatasetDescription?: string|null,
     *     DataAggregation?: DataAggregation|null,
     *     Filters?: list<TopicFilter>|null,
     *     Columns?: list<TopicColumn>|null,
     *     CalculatedFields?: list<TopicCalculatedField>|null,
     *     NamedEntities?: list<TopicNamedEntity>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
