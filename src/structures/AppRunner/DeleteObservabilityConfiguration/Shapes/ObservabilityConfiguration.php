<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteObservabilityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObservabilityConfigurationArn
 * @property string $ObservabilityConfigurationName
 * @property TraceConfiguration $TraceConfiguration
 * @property int $ObservabilityConfigurationRevision
 * @property bool $Latest
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $DeletedAt
 */
class ObservabilityConfiguration extends Shape
{
    /**
     * @param array{
     *     ObservabilityConfigurationArn?: string,
     *     ObservabilityConfigurationName?: string,
     *     TraceConfiguration?: TraceConfiguration,
     *     ObservabilityConfigurationRevision?: int,
     *     Latest?: bool,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DeletedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
