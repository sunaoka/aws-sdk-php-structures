<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ReportInstrumentationConfigurationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Service
 * @property string $Environment
 * @property list<Shapes\InstrumentationConfigurationStatusReport> $Configurations
 */
class ReportInstrumentationConfigurationStatusRequest extends Request
{
    /**
     * @param array{
     *     Service: string,
     *     Environment: string,
     *     Configurations: list<Shapes\InstrumentationConfigurationStatusReport>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
