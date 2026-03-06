<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $outputLocation
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $status
 * @property string|null $failureReason
 */
class ArtifactDetails extends Shape
{
    /**
     * @param array{
     *     outputLocation?: string|null,
     *     status?: 'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
