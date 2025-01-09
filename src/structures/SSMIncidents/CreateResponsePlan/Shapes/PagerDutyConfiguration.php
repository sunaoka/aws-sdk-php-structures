<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property PagerDutyIncidentConfiguration $pagerDutyIncidentConfiguration
 * @property string $secretId
 */
class PagerDutyConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     pagerDutyIncidentConfiguration: PagerDutyIncidentConfiguration,
     *     secretId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
