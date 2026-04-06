<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Namespace
 * @property list<Shapes\MetricDatum>|null $MetricData
 * @property list<Shapes\EntityMetricData>|null $EntityMetricData
 * @property bool|null $StrictEntityValidation
 */
class PutMetricDataRequest extends Request
{
    /**
     * @param array{
     *     Namespace: string,
     *     MetricData?: list<Shapes\MetricDatum>|null,
     *     EntityMetricData?: list<Shapes\EntityMetricData>|null,
     *     StrictEntityValidation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
