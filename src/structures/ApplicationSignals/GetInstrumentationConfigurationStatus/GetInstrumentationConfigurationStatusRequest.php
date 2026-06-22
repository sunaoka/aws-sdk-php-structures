<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetInstrumentationConfigurationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 * @property string $Service
 * @property string $Environment
 * @property 'SNAPSHOT' $SignalType
 * @property Shapes\LocationIdentifier $LocationIdentifier
 * @property 'READY'|'ERROR'|'ACTIVE'|'DISABLED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetInstrumentationConfigurationStatusRequest extends Request
{
    /**
     * @param array{
     *     InstrumentationType: 'BREAKPOINT'|'PROBE',
     *     Service: string,
     *     Environment: string,
     *     SignalType: 'SNAPSHOT',
     *     LocationIdentifier: Shapes\LocationIdentifier,
     *     Status?: 'READY'|'ERROR'|'ACTIVE'|'DISABLED'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
