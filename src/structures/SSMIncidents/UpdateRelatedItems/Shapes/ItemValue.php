<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $metricDefinition
 * @property PagerDutyIncidentDetail $pagerDutyIncidentDetail
 * @property string $url
 */
class ItemValue extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     metricDefinition?: string,
     *     pagerDutyIncidentDetail?: PagerDutyIncidentDetail,
     *     url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
