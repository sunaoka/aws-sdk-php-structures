<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListEventDataStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventDataStoreArn
 * @property string|null $Name
 * @property bool|null $TerminationProtectionEnabled
 * @property 'CREATED'|'ENABLED'|'PENDING_DELETION'|'STARTING_INGESTION'|'STOPPING_INGESTION'|'STOPPED_INGESTION'|null $Status
 * @property list<AdvancedEventSelector>|null $AdvancedEventSelectors
 * @property bool|null $MultiRegionEnabled
 * @property bool|null $OrganizationEnabled
 * @property int<7, 3653>|null $RetentionPeriod
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class EventDataStore extends Shape
{
    /**
     * @param array{
     *     EventDataStoreArn?: string|null,
     *     Name?: string|null,
     *     TerminationProtectionEnabled?: bool|null,
     *     Status?: 'CREATED'|'ENABLED'|'PENDING_DELETION'|'STARTING_INGESTION'|'STOPPING_INGESTION'|'STOPPED_INGESTION'|null,
     *     AdvancedEventSelectors?: list<AdvancedEventSelector>|null,
     *     MultiRegionEnabled?: bool|null,
     *     OrganizationEnabled?: bool|null,
     *     RetentionPeriod?: int<7, 3653>|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
