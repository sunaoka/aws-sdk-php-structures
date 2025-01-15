<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $metricDefinition
 * @property PagerDutyIncidentDetail|null $pagerDutyIncidentDetail
 * @property string|null $url
 */
class ItemValue extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     metricDefinition?: string|null,
     *     pagerDutyIncidentDetail?: PagerDutyIncidentDetail|null,
     *     url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
