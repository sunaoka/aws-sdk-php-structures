<?php

namespace Sunaoka\Aws\Structures\XRay\PutTelemetryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TelemetryRecord> $TelemetryRecords
 * @property string|null $EC2InstanceId
 * @property string|null $Hostname
 * @property string|null $ResourceARN
 */
class PutTelemetryRecordsRequest extends Request
{
    /**
     * @param array{
     *     TelemetryRecords: list<Shapes\TelemetryRecord>,
     *     EC2InstanceId?: string|null,
     *     Hostname?: string|null,
     *     ResourceARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
