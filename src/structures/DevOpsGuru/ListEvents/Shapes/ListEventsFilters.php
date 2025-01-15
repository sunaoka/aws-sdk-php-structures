<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InsightId
 * @property EventTimeRange|null $EventTimeRange
 * @property 'INFRASTRUCTURE'|'DEPLOYMENT'|'SECURITY_CHANGE'|'CONFIG_CHANGE'|'SCHEMA_CHANGE'|null $EventClass
 * @property string|null $EventSource
 * @property 'AWS_CLOUD_TRAIL'|'AWS_CODE_DEPLOY'|null $DataSource
 * @property ResourceCollection|null $ResourceCollection
 */
class ListEventsFilters extends Shape
{
    /**
     * @param array{
     *     InsightId?: string|null,
     *     EventTimeRange?: EventTimeRange|null,
     *     EventClass?: 'INFRASTRUCTURE'|'DEPLOYMENT'|'SECURITY_CHANGE'|'CONFIG_CHANGE'|'SCHEMA_CHANGE'|null,
     *     EventSource?: string|null,
     *     DataSource?: 'AWS_CLOUD_TRAIL'|'AWS_CODE_DEPLOY'|null,
     *     ResourceCollection?: ResourceCollection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
