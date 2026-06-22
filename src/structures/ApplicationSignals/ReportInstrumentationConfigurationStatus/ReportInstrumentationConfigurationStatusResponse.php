<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ReportInstrumentationConfigurationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Service
 * @property string $Environment
 * @property list<Shapes\UnprocessedStatusEvent> $UnprocessedStatusEvents
 */
class ReportInstrumentationConfigurationStatusResponse extends Response
{
}
