<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteObservabilityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObservabilityConfigurationArn
 * @property string|null $ObservabilityConfigurationName
 * @property TraceConfiguration|null $TraceConfiguration
 * @property int|null $ObservabilityConfigurationRevision
 * @property bool|null $Latest
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $DeletedAt
 */
class ObservabilityConfiguration extends Shape
{
    /**
     * @param array{
     *     ObservabilityConfigurationArn?: string|null,
     *     ObservabilityConfigurationName?: string|null,
     *     TraceConfiguration?: TraceConfiguration|null,
     *     ObservabilityConfigurationRevision?: int|null,
     *     Latest?: bool|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DeletedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
