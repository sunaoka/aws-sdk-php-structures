<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListEventDataStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventDataStoreArn
 * @property string $Name
 * @property bool $TerminationProtectionEnabled
 * @property 'CREATED'|'ENABLED'|'PENDING_DELETION'|'STARTING_INGESTION'|'STOPPING_INGESTION'|'STOPPED_INGESTION' $Status
 * @property list<AdvancedEventSelector> $AdvancedEventSelectors
 * @property bool $MultiRegionEnabled
 * @property bool $OrganizationEnabled
 * @property int $RetentionPeriod
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class EventDataStore extends Shape
{
    /**
     * @param array{
     *     EventDataStoreArn?: string,
     *     Name?: string,
     *     TerminationProtectionEnabled?: bool,
     *     Status?: 'CREATED'|'ENABLED'|'PENDING_DELETION'|'STARTING_INGESTION'|'STOPPING_INGESTION'|'STOPPED_INGESTION',
     *     AdvancedEventSelectors?: list<AdvancedEventSelector>,
     *     MultiRegionEnabled?: bool,
     *     OrganizationEnabled?: bool,
     *     RetentionPeriod?: int,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
