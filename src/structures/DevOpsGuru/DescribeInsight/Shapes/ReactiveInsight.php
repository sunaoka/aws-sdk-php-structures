<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Severity
 * @property 'ONGOING'|'CLOSED'|null $Status
 * @property InsightTimeRange|null $InsightTimeRange
 * @property ResourceCollection|null $ResourceCollection
 * @property string|null $SsmOpsItemId
 * @property string|null $Description
 */
class ReactiveInsight extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     Status?: 'ONGOING'|'CLOSED'|null,
     *     InsightTimeRange?: InsightTimeRange|null,
     *     ResourceCollection?: ResourceCollection|null,
     *     SsmOpsItemId?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
