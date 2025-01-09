<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StatelessCustomPublishMetricActionDimension> $Dimensions
 */
class StatelessCustomPublishMetricAction extends Shape
{
    /**
     * @param array{Dimensions?: list<StatelessCustomPublishMetricActionDimension>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
