<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListInstrumentationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Service
 * @property string $Environment
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 * @property \Aws\Api\DateTimeResult|null $SyncedAt
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListInstrumentationConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     Service: string,
     *     Environment: string,
     *     InstrumentationType: 'BREAKPOINT'|'PROBE',
     *     SyncedAt?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
