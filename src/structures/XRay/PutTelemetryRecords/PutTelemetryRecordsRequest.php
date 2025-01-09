<?php

namespace Sunaoka\Aws\Structures\XRay\PutTelemetryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TelemetryRecord> $TelemetryRecords
 * @property string $EC2InstanceId
 * @property string $Hostname
 * @property string $ResourceARN
 */
class PutTelemetryRecordsRequest extends Request
{
    /**
     * @param array{
     *     TelemetryRecords: list<Shapes\TelemetryRecord>,
     *     EC2InstanceId?: string,
     *     Hostname?: string,
     *     ResourceARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
