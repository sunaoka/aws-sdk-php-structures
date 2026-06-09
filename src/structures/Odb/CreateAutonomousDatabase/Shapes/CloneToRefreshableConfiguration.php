<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceAutonomousDatabaseId
 * @property 'AUTOMATIC'|'MANUAL'|null $refreshableMode
 * @property int<3600, 604800>|null $autoRefreshFrequencyInSeconds
 * @property int<0, 604800>|null $autoRefreshPointLagInSeconds
 * @property \Aws\Api\DateTimeResult|null $timeOfAutoRefreshStart
 * @property 'READ_ONLY'|'READ_WRITE'|null $openMode
 * @property 'FULL'|'METADATA'|'PARTIAL'|null $cloneType
 */
class CloneToRefreshableConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceAutonomousDatabaseId: string,
     *     refreshableMode?: 'AUTOMATIC'|'MANUAL'|null,
     *     autoRefreshFrequencyInSeconds?: int<3600, 604800>|null,
     *     autoRefreshPointLagInSeconds?: int<0, 604800>|null,
     *     timeOfAutoRefreshStart?: \Aws\Api\DateTimeResult|null,
     *     openMode?: 'READ_ONLY'|'READ_WRITE'|null,
     *     cloneType?: 'FULL'|'METADATA'|'PARTIAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
