<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateInstrumentationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 * @property string $Service
 * @property string $Environment
 * @property 'SNAPSHOT' $SignalType
 * @property Shapes\Location $Location
 * @property string $LocationHash
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property list<array<string, string>>|null $AttributeFilters
 * @property Shapes\CaptureConfiguration $CaptureConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $ARN
 */
class CreateInstrumentationConfigurationResponse extends Response
{
}
