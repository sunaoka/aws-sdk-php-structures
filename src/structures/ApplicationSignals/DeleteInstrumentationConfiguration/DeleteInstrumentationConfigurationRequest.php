<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\DeleteInstrumentationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 * @property string $Service
 * @property string $Environment
 * @property 'SNAPSHOT' $SignalType
 * @property Shapes\LocationIdentifier $LocationIdentifier
 */
class DeleteInstrumentationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     InstrumentationType: 'BREAKPOINT'|'PROBE',
     *     Service: string,
     *     Environment: string,
     *     SignalType: 'SNAPSHOT',
     *     LocationIdentifier: Shapes\LocationIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
