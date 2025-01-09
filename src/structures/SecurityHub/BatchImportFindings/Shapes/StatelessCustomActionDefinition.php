<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatelessCustomPublishMetricAction $PublishMetricAction
 */
class StatelessCustomActionDefinition extends Shape
{
    /**
     * @param array{PublishMetricAction?: StatelessCustomPublishMetricAction} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
