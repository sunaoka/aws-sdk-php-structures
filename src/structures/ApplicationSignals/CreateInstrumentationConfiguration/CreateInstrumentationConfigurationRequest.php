<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateInstrumentationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 * @property string $Service
 * @property string $Environment
 * @property 'SNAPSHOT' $SignalType
 * @property Shapes\Location $Location
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property list<array<string, string>>|null $AttributeFilters
 * @property Shapes\CaptureConfiguration $CaptureConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateInstrumentationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     InstrumentationType: 'BREAKPOINT'|'PROBE',
     *     Service: string,
     *     Environment: string,
     *     SignalType: 'SNAPSHOT',
     *     Location: Shapes\Location,
     *     Description?: string|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     AttributeFilters?: list<array<string, string>>|null,
     *     CaptureConfiguration: Shapes\CaptureConfiguration,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
