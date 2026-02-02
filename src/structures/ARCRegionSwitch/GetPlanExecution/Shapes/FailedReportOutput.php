<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'insufficientPermissions'|'invalidResource'|'configurationError'|null $errorCode
 * @property string|null $errorMessage
 */
class FailedReportOutput extends Shape
{
    /**
     * @param array{
     *     errorCode?: 'insufficientPermissions'|'invalidResource'|'configurationError'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
