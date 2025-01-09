<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENTS_ONLINE'|'AGENTS_AVAILABLE'|'AGENTS_ON_CALL'|'AGENTS_NON_PRODUCTIVE'|'AGENTS_AFTER_CONTACT_WORK'|'AGENTS_ERROR'|'AGENTS_STAFFED'|'CONTACTS_IN_QUEUE'|'OLDEST_CONTACT_AGE'|'CONTACTS_SCHEDULED'|'AGENTS_ON_CONTACT'|'SLOTS_ACTIVE'|'SLOTS_AVAILABLE' $SortByMetric
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class CurrentMetricSortCriteria extends Shape
{
    /**
     * @param array{
     *     SortByMetric?: 'AGENTS_ONLINE'|'AGENTS_AVAILABLE'|'AGENTS_ON_CALL'|'AGENTS_NON_PRODUCTIVE'|'AGENTS_AFTER_CONTACT_WORK'|'AGENTS_ERROR'|'AGENTS_STAFFED'|'CONTACTS_IN_QUEUE'|'OLDEST_CONTACT_AGE'|'CONTACTS_SCHEDULED'|'AGENTS_ON_CONTACT'|'SLOTS_ACTIVE'|'SLOTS_AVAILABLE',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
