<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListInstrumentationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 * @property 'SNAPSHOT' $SignalType
 * @property Location $Location
 * @property string $LocationHash
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property list<array<string, string>>|null $AttributeFilters
 * @property CaptureConfiguration $CaptureConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $ARN
 */
class InstrumentationConfigurationWithoutServiceEnv extends Shape
{
    /**
     * @param array{
     *     InstrumentationType: 'BREAKPOINT'|'PROBE',
     *     SignalType: 'SNAPSHOT',
     *     Location: Location,
     *     LocationHash: string,
     *     Description?: string|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     AttributeFilters?: list<array<string, string>>|null,
     *     CaptureConfiguration: CaptureConfiguration,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     ARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
