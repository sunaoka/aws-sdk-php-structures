<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENTS_ONLINE'|'AGENTS_AVAILABLE'|'AGENTS_ON_CALL'|'AGENTS_NON_PRODUCTIVE'|'AGENTS_AFTER_CONTACT_WORK'|'AGENTS_ERROR'|'AGENTS_STAFFED'|'CONTACTS_IN_QUEUE'|'OLDEST_CONTACT_AGE'|'CONTACTS_SCHEDULED'|'AGENTS_ON_CONTACT'|'SLOTS_ACTIVE'|'SLOTS_AVAILABLE' $Name
 * @property 'SECONDS'|'COUNT'|'PERCENT' $Unit
 */
class CurrentMetric extends Shape
{
    /**
     * @param array{
     *     Name?: 'AGENTS_ONLINE'|'AGENTS_AVAILABLE'|'AGENTS_ON_CALL'|'AGENTS_NON_PRODUCTIVE'|'AGENTS_AFTER_CONTACT_WORK'|'AGENTS_ERROR'|'AGENTS_STAFFED'|'CONTACTS_IN_QUEUE'|'OLDEST_CONTACT_AGE'|'CONTACTS_SCHEDULED'|'AGENTS_ON_CONTACT'|'SLOTS_ACTIVE'|'SLOTS_AVAILABLE',
     *     Unit?: 'SECONDS'|'COUNT'|'PERCENT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
