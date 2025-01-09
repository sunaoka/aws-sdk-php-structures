<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListResponsePlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $displayName
 * @property string $name
 */
class ResponsePlanSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     displayName?: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
