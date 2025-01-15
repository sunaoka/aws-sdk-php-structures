<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatelessCustomPublishMetricAction|null $PublishMetricAction
 */
class StatelessCustomActionDefinition extends Shape
{
    /**
     * @param array{PublishMetricAction?: StatelessCustomPublishMetricAction|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
