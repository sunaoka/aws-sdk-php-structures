<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetInstrumentationConfigurationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Service
 * @property string $Environment
 * @property 'SNAPSHOT' $SignalType
 * @property Shapes\Location $Location
 * @property 'READY'|'ERROR'|'ACTIVE'|'DISABLED' $Status
 * @property list<Shapes\InstrumentationStatusEvent> $Events
 * @property string|null $NextToken
 */
class GetInstrumentationConfigurationStatusResponse extends Response
{
}
