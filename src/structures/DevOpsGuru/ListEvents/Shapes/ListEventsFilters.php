<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InsightId
 * @property EventTimeRange $EventTimeRange
 * @property 'INFRASTRUCTURE'|'DEPLOYMENT'|'SECURITY_CHANGE'|'CONFIG_CHANGE'|'SCHEMA_CHANGE' $EventClass
 * @property string $EventSource
 * @property 'AWS_CLOUD_TRAIL'|'AWS_CODE_DEPLOY' $DataSource
 * @property ResourceCollection $ResourceCollection
 */
class ListEventsFilters extends Shape
{
    /**
     * @param array{
     *     InsightId?: string,
     *     EventTimeRange?: EventTimeRange,
     *     EventClass?: 'INFRASTRUCTURE'|'DEPLOYMENT'|'SECURITY_CHANGE'|'CONFIG_CHANGE'|'SCHEMA_CHANGE',
     *     EventSource?: string,
     *     DataSource?: 'AWS_CLOUD_TRAIL'|'AWS_CODE_DEPLOY',
     *     ResourceCollection?: ResourceCollection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
