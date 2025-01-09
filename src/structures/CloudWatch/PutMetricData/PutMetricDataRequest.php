<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Namespace
 * @property list<Shapes\MetricDatum> $MetricData
 * @property list<Shapes\EntityMetricData> $EntityMetricData
 * @property bool $StrictEntityValidation
 */
class PutMetricDataRequest extends Request
{
    /**
     * @param array{
     *     Namespace: string,
     *     MetricData?: list<Shapes\MetricDatum>,
     *     EntityMetricData?: list<Shapes\EntityMetricData>,
     *     StrictEntityValidation?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
