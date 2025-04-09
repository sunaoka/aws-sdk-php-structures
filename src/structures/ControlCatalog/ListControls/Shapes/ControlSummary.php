<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property 'PREVENTIVE'|'PROACTIVE'|'DETECTIVE'|null $Behavior
 * @property 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $Severity
 * @property ImplementationSummary|null $Implementation
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 */
class ControlSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     Description: string,
     *     Behavior?: 'PREVENTIVE'|'PROACTIVE'|'DETECTIVE'|null,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     Implementation?: ImplementationSummary|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
