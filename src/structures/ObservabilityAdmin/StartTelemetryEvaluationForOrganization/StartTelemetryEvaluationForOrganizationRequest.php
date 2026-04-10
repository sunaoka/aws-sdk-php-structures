<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartTelemetryEvaluationForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Regions
 * @property bool|null $AllRegions
 */
class StartTelemetryEvaluationForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     Regions?: list<string>|null,
     *     AllRegions?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
