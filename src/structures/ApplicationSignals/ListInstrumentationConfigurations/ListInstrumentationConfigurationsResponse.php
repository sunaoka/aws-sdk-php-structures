<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListInstrumentationConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Service
 * @property string $Environment
 * @property bool $Changed
 * @property list<Shapes\InstrumentationConfigurationWithoutServiceEnv>|null $LatestConfigurations
 * @property \Aws\Api\DateTimeResult $SyncedAt
 * @property int<60, max> $SyncInterval
 * @property string|null $NextToken
 */
class ListInstrumentationConfigurationsResponse extends Response
{
}
