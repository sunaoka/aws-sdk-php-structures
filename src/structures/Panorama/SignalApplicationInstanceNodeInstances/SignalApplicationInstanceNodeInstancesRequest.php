<?php

namespace Sunaoka\Aws\Structures\Panorama\SignalApplicationInstanceNodeInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationInstanceId
 * @property list<Shapes\NodeSignal> $NodeSignals
 */
class SignalApplicationInstanceNodeInstancesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationInstanceId: string,
     *     NodeSignals: list<Shapes\NodeSignal>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
