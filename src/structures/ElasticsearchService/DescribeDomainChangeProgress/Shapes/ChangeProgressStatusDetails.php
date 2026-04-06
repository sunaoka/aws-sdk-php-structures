<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChangeId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'PENDING'|'PROCESSING'|'COMPLETED'|'FAILED'|null $Status
 * @property list<string>|null $PendingProperties
 * @property list<string>|null $CompletedProperties
 * @property int|null $TotalNumberOfStages
 * @property list<ChangeProgressStage>|null $ChangeProgressStages
 */
class ChangeProgressStatusDetails extends Shape
{
    /**
     * @param array{
     *     ChangeId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PENDING'|'PROCESSING'|'COMPLETED'|'FAILED'|null,
     *     PendingProperties?: list<string>|null,
     *     CompletedProperties?: list<string>|null,
     *     TotalNumberOfStages?: int|null,
     *     ChangeProgressStages?: list<ChangeProgressStage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
